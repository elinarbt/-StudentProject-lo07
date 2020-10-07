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
    ?>
    <div class="jumbotron3">
        <?php
        if ($newRecolte == -1) {
            echo ("
            <h2>Attention, vous avez déjà récolté ce vin.</h2>
            <p>Ces deux clés primaires ne peuvent pas être ré insérées.
            Des amélioratoins de tables sont explicitées dans l'onglet documentation.</p>
            ");
        } else {
            foreach ($newRecolte as $element) {
                echo $element;
            }
            echo("<h4>Félicitation, " . $prenomProd . " " . $nomProd . ", vous avez récolté " . $quantite . " " . $cruVin . " !</h4>");
        }
        ?>
    </div>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>
