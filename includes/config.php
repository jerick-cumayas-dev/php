<?php
$db_user = 'root';
$db_password = ''; // Replace 'your_database_password' with your actual database password
$db_name = 'phprest';

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname='.$db_name.';charset=utf8', $db_user, $db_password);
    // Set db attributes
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle database connection error
    echo "Connection failed: " . $e->getMessage();
    exit(); // Stop further execution
}

define('APP_NAME', 'PHP REST API');
?>
