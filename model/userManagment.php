<?php
require_once 'dbConnector.php';
function getuser($user)
{
  /*$query = "select userEmailAddress,userPsw from users
            where userEmailAddress = $user";*/
    $query = "SELECT userEmailAddress, userHashPsw, pseudo FROM users where userEmailAddress = '" . $user['login']. "' OR pseudo ='".$user['login']. "' and userHashPsw ='".$user['loginpass']. "';";

    $TestLogin = executeQuerySelect($query);
 var_dump($TestLogin);
    if ($TestLogin == true)
    {
        return true;
    }else{
        return false;
    }
}
