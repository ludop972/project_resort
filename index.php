<?php
require('vendor/autoload.php');

try {
    switch($_GET)
    {
        case '/':
            require('view/homepage.php');
            break;

        case 'login':
            require('view/layout.php');

        default:
            header("Location: view/homepage.php");
            break;
    }
} catch(Exception $e)
{
    header("Location: view/homepage.php");
}