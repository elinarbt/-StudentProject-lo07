<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax3">
    <div class="titre">
        Vous êtes producteurs et vous voulez participer aux récoltes de la Cave de l'utt...
    </div>
</div>
</body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    foreach ($resultsProd as $element){
        $nomProd = $element->getNom();
        $prenomProd = $element->getPrenom();
        $idProd = $element->getId();
    }

    foreach ($resultsVin as $element){
        $cruVin = $element->getCru();
        $idVin = $element->getId();
    }
    echo $idProd;
    echo $idVin;
    echo ('<h4>Bienvenue parmi nous, '.$prenomProd.' '.$nomProd.' ! </h4>');
    echo ('<h4>Vous avez récolté du '.$cruVin.'. Rentrez maintenant la quantité de bouteilles de votre récolte :</h4>');
    ?>

    <form method="get" role="form" action="router2.php">
        <input type="hidden" name="action" value="recolteCreated">
        <div>
            <input type="text" id="quantite" name="quantite">
        </div>
        <input type="hidden" name="nomProd" value="<?php echo $nomProd;?>">
        <input type="hidden" name="prenomProd" value="<?php echo $prenomProd;?>">
        <input type="hidden" name="idProd" value="<?php echo $idProd ?>">
        <input type="hidden" name="idVin" value="<?php echo $idVin ?>">
        <input type="hidden" name="cruVin" value="<?php echo $cruVin ?>">

        <button class="btn btn-default" type="submit">Ok</button>
    </form>

    <button class="btn btn-default" onclick="history.go(-1)">Back</button>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

