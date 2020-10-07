<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax3">
    <div class="titre">
        Découvrez nos récoltes de la région <?php echo $regionSelected ?> !
    </div>
</div>
</body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    echo('<h1>' . $regionSelected . '</h1> <br>');

    for ($i = 0; $i < $resultsLength; $i++) {
        $listePrenoms[] = $results[$i]['prenom'];
        $listeNoms[] = $results[$i]['nom'];
        $listeQuantites[] = $results[$i]['quantite'];
        $listeCrus[] = $results[$i]['cru'];

        echo ('<div class="jumbotron2" style="font-weight: bold; font-size: large">' .
                $listePrenoms[$i].' '.$listeNoms[$i].' a récolté '.$listeQuantites[$i].' '.$listeCrus[$i]
            .'</div>');
    }
    ?>

</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>