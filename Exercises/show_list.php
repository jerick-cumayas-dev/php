<?php 
    $colors = array('white', 'green', 'red');
    
    //echo can print html tags with variables
    foreach ($colors as $color){
        echo "<li> {$color} </li>";
    }

    echo "<br>";

    //green, red, white order
    //using indexes
    echo "<li> {$colors[1]} </li>";
    echo "<li> {$colors[2]} </li>";
    echo "<li> {$colors[0]} </li>";

    echo "<br>";

    //using array_search
    echo "<li> {$colors[array_search('green', $colors)]} </li>";
    echo "<li> {$colors[array_search('red', $colors)]} </li>";
    echo "<li> {$colors[array_search('white', $colors)]} </li>";

    echo "<br>";

    //using array_filter
    function filter_color($color_array, $search){
        $result = array_filter($color_array, function ($color) use ($search) {
            return stripos($color, $search) !== false;
        });

        return $result ? reset($result) : 'color not found';
    }
    echo "<li> " . filter_color($colors, 'green') . " </li>";
    echo "<li> " . filter_color($colors, 'red') . " </li>";
    echo "<li> " . filter_color($colors, 'white') . " </li>";
?>