<?php 
    $color = array('white', 'green', 'red', 'blue', 'black');

    //by using indexes to access the elements
    $paragraph1 = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet, the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo $paragraph1 . '<br>';

    //by using predefined array search
    //array_search(search_element, array);
    //returns the key or index of where the element is found.
    //returns false if element is not found.
    $color_red = 'red';
    $color_green = 'green';
    $color_white = 'white';

    $paragraph2 = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[array_search($color_red, $color)]} carpet, the {$color[array_search($color_green, $color)]} lawn, the {$color[array_search($color_white, $color)]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo $paragraph2 . '<br>';

    //by using filter to access the elements of an array
    function filter_color($color_array, $search){
        $result = array_filter($color_array, function($color) use ($search) {
            return stripos($color, $search) !== false;
        });

        //result - containing all elements from the input array that match the search
        //reset - gets the first element of result
        return $result ? reset($result) : 'color not found';
    }

    $paragraph3 = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . filter_color($color, $color_red) . " carpet, the " . filter_color($color, $color_green) . " lawn, the " . filter_color($color, $color_white) . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    echo $paragraph3 . "<br>";

    if ($paragraph1 == $paragraph2 && $paragraph1 == $paragraph3){
        echo 'Status: Passed';
    } else {
        echo 'Status: Failed';
    }
    
?>