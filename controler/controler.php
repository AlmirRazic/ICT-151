<?php


require 'model/userManagment.php';
require 'model/snowsManagment.php';

// This file contains nothing but functions
function home()
{
   // $news = getNews();
    $_GET['action'] = 'home';
    require_once 'view/home.php';
}

function displaySnows_json()
{
    $snows = getsnows();
    require_once 'view/snows.php';
}

function login()
{
    require_once 'view/login.php';
}

function trylogin($user)
{

    if (getuser($user)){
        home();
    }else{
        login();
    }
}



function logout()
{
    session_unset();
    session_destroy();
    home();
}

function register()
{
    require_once 'view/register.php';
}

function tryregister()
{


    if ($_POST['registername'] == "" && $_POST['registerpass'] == "") {
        register();
    } else {
        $fichier = getusers();
        $userdata['user'] = $_POST['registername'];
        $userdata['pass'] = $_POST['registerpass'];
        $fichier[] = $userdata;
        putUsers($fichier);

        $_SESSION['username'] = $_POST['registername'];
        home();

    }
}

function displaySnows()
{
    $snows = get_snows();

    require 'view/snows.php';
}











?>
