<?php
    class PostController {
        private $connection;
        private $table = 'posts';

        public function __construct($db){
            $this->connection = $db;
        }

        public function index($requestData){
            $query = "SELECT * FROM {$this->table}";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
        }

        public function read($requestData){
            $query = "SELECT * FROM {$this->table} WHERE id = :post_id";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(':post_id', $id, PDO::PARAM_INT);
            $statement->execute();
            $post = $statement->fetch(PDO::FETCH_ASSOC);

            if ($post) {
                echo json_encode($post);
            } else {
                http_response_code(404);
                echo 'Post not found';
            }
        }

        public function create($requestData){
            if (isset($requestData['title']) && isset($requestData['body']) && isset($requestData['author'])){
                $title = $requestData['title'];
                $body = $requestData['body'];
                $author = $requestData['author'];

                $query = "INSERT INTO {$this->table} (title, body, author) VALUES (:title, :body, :author)";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(':title', $title);
                $statement->bindParam(':body', $body);
                $statement->bindParam(':author', $author);

                

            }
        }
    }
?>