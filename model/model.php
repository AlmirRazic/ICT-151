<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}

function getsnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
}

function getusers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}
function putUsers($fichier)
{
    file_put_contents('model/dataStorage/users.json', json_encode($fichier));
}

function get_snows()
{
    $Query = "select";
    $snows = executequery($Query);
}
function executequery($requête)
{
    openDBconnexion();

}

function openDBconnexion()
{

}

function userconnect()
{
    //mandatory arguments
    $sqlDriver = 'mysql';
    $hostname = 'mydbserver.domain.com';
    $userName = 'userName';
    $userPwd = 'userPwd';

    //optional arguments
    $dbName = 'myDbName';
    $dbEncoding = 'utf8';
    $dbPort = '3306';

    $dbConnector = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

    //with optionnal arguments
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=test;charset=utf8', $user, $pass);

    try{
        $tempDbConnection = new PDO($dsn, $userName, $userPwd);
    }
    catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage();
    }
}

