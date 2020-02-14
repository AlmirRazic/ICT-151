<?php
ob_start();
$title = "RentASnow - Register";

?>

<div>
    <div>
        <br>
        <form action="/index.php?action=tryregister" method="post">
            <input type="text" id="A" name="registername" placeholder="registername">
            <br>
            <input type="text" id="B" name="registerpass" placeholder="registerpass">
            <br>
            <input type="submit" value="Regiter">
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
require_once "gabarit.php";
?>

