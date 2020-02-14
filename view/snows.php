<?php
ob_start();
$title = "RentASnow - snows";
?>

<?php foreach ($snows as $onepieceofsnow) { ?>
    <div class="row mt-4">
        <h4 class="col-4"><?= $onepieceofsnow['title'] ?></h4>
    </div>
    <div class="row ml-5"><?= $onepieceofsnow['size'] ?></div>
    <div class="row ml-5"><?= $onepieceofsnow['color'] ?></div>
<?php } ?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
