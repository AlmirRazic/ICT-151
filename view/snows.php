<?php
ob_start();
$title = "RentASnow - snows";
?>

<?php foreach ($snows as $onepieceofsnow) { ?>
    <!--<div class="row mt-4">
        <h4 class="col-4"><?/*= $onepieceofsnow['brand'] */?></h4>
    </div>
    <div class="row ml-5"><?/*= $onepieceofsnow['snowLength'] */?></div>
    <div class="row ml-5"><?/*= $onepieceofsnow['model'] */?></div>-->


    <div class="yox-view">
        <ul class="thumbnails">
            <li class="span3">
                <div class="thumbnail">
                    <a href="" target="blank"><img src="<?= $onepieceofsnow['photo'] ?>"></a>
                    <div class="caption">
                        <h3><a href="index.php?action=displayASnow&code=B101">B101</a></h3>
                        <p><strong>Marque : </strong><?= $onepieceofsnow['brand'] ?></p>
                        <p><strong>Modèle : </strong><?= $onepieceofsnow['model'] ?></p>
                        <p><strong>Longueur : </strong><?= $onepieceofsnow['snowLength'] ?></p>
                        <p><strong>Prix :</strong><?= $onepieceofsnow['dailyPrice'] ?></p>
                        <p><strong>Disponibilité : </strong><?= $onepieceofsnow['qtyAvailable'] ?></p>
                        <p><a href="index.php?action=snowLeasingRequest&code=B101" class="btn btn-primary">Louer ce snow</a></p>
                    </div>
                </div>
            </li>
    </div>
<?php } ?>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
