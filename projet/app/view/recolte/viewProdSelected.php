<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax3">
    <div class="titre">
        Découvrez les récoltes de nos producteurs !
    </div>
</div>
</body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';

    if ($resultsLength == 0) {
        echo("<h4>Le nom du producteur que vous avez rentré n'existe pas, ou n'a pas participé à une récolte. <br>
                    Peut-être avez vous fait une faute de frappe, sinon réessayez avec quelqu'un ayant réalisé au moins une récolte.</h4>");
    } else {
        echo('<div class="jumbotron2" style="font-weight: bold; font-size: large;">
            <h1>' . $results[0]['prenom'] . ' ' . $results[0]['nom'] . '</h1>
            <ul>
              <li>Région : ' . $results[0]['region'] . '</li>
              <li>Id : ' . $results[0]['id'] . '</li>
              <li>Récoltes : ');

        if ($resultsLength > 1) {
            for ($i = 0; $i < $resultsLength; $i++) {
                echo('<br>- ' . $results[$i]['quantite'] . ' bouteille(s) de ' . $results[$i]['cru'] . ' ');
            }
        } else {
            echo($results[0]['quantite'] . ' bouteille(s) de ' . $results[0]['cru']);
        }

        echo('</li></ul></div>');
    }
    ?>
    <button class="btn btn-default" onclick="history.go(-1)">Back</button>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>