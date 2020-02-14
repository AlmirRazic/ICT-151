<?php

session_start();

require "controler/controler.php";
if(isset($_GET['action']))
{
    $action=$_GET['action'];
}
else
{
    $action='home';
}

switch ($action)
{
    case 'home':
        home();
        break;

    case 'displaySnows':
        displaySnows();
        break;

    case 'login':
        login();
        break;

    case 'trylogin':
        trylogin();
        break;

    case 'logout':
        logout();
        break;

    case 'register':
        register();
        break;
    case 'tryregister':
        tryregister();
        break;

    default:
        home();
        break;
}
?>
