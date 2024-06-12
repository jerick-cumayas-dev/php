<?php
    class Route {
        public $method;
        public $path;
        public $controller;
        public $function;

        public function __construct($method, $path, $controller, $function){
            $this->method = $method;
            $this->path = $path;
            $this->controller = $controller;
            $this->function = $function;
        }
    }

    class Router {
        private $routes = [];
        private $db; // Declare a property to hold the database connection

        public function __construct($db) {
            $this->db = $db; // Assign the database connection to the property
        }
    
        public function addRoute($method, $path, $controller, $function){
            $this->routes[] = new Route($method, $path, $controller, $function);
        }
    
        public function dispatch($requestMethod, $requestPath){
            foreach ($this->routes as $route){
                // Use regex to match dynamic segments in the URL
                $path = preg_replace('/\{[^\}]+\}/', '([^/]+)', $route->path);
                if ($route->method == $requestMethod && preg_match('#^' . $path . '$#', $requestPath, $matches)){
                    require_once __DIR__ . '/../controllers/' . $route->controller . '.php';
                    $controller = new $route->controller($this->db);
                    $function = $route->function;
                    
                    $parameters = [];
                    preg_match_all('/\{([^\}]+)\}/', $route->path, $paramMatches);
                    foreach ($paramMatches[1] as $index => $paramName) {
                        $parameters[$paramName] = $matches[$index + 1];
                    }
    
                    $queryParams = $_GET;
                    $formData = $_POST;
                    $headers = getallheaders();
    
                    // Merge all request data into a single array
                    $requestData = array_merge($parameters, $queryParams, $formData, ['headers' => $headers]);

                    foreach($requestData as $key => $data){
                        if (is_array($data)) {
                            echo "{$key} => " . json_encode($data) . "<br>";
                        } else {
                            echo "{$key} => {$data}<br>";
                        }
                    }
    
                    // Call the controller method with the request data
                    return call_user_func_array([$controller, $function], [$requestData]);
                }
            }
            http_response_code(404);
            echo 'Page not found.';
        }
    }
    
?>