<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Session Data</title>
</head>
<body>
    <p>Favorite Colors:</p>
    <?php
        if(isset($_SESSION["favcolor"])) {
            foreach($_SESSION["favcolor"] as $color) {
                echo $color . "<br>";
            }
        } else {
            echo "Favorite colors are not set.";
        }
    ?>

    <p>Favorite Animal:</p>
    <?php
        if(isset($_SESSION["favanimal"])) {
            echo $_SESSION["favanimal"];
        } else {
            echo "Favorite animal is not set.";
        }
    ?>
</body>
</html>
