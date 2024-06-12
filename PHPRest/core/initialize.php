<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:\xampp\htdocs\PHPRest');
    
    defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
    defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');

    //load config file
    require_once(INC_PATH.DS."config.php");

    //load core classes
    require_once(CORE_PATH.DS."models/Post.php");
?>