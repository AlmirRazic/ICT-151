<?php
session_start();


require "controler/controler.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
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
            trylogin($_POST);
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
} else {
    home();
}
?>
