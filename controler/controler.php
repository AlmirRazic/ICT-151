<?php
require_once 'model/model.php';

// This file contains nothing but functions
function home()
{
    $news = getNews();
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

function trylogin()
{
    $user = getusers();
    if (isset($_POST['login']))
    {
        foreach ($user as $username)
        {
            if ($_POST['login'] == $username["user"] && $_POST['loginpass'] == $username["pass"])
            {
                $_SESSION['username'] = $_POST['login'];
            }
        }
        home();
    }
    else
    {
        require_once 'view/login.php';
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
    $Snows = get_snows();

}











?>
