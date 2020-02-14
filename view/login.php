<?php
ob_start();
$title = "RentASnow - Login";

?>

<div>
    <div>
        <br>
        <form action="/index.php?action=trylogin" method="post">
            <input type="text" id="login" name="login" placeholder="login">
            <br>
            <input type="text" id="loginpass" name="loginpass" placeholder="password">
            <br>
            <input type="submit" value="Log In">
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
require_once "gabarit.php";
?>

