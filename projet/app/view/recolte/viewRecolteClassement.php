<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax3">
    <div class="titre">
        Voici le classement des plus grandes récoltes !
    </div>
</div>
</body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html'; ?>
    <div class="jumbotron3">
        <h1>Les plus grandes récoltes de la Cave de l'UTT</h1><br>
        <h3>Top 10 :</h3><br>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Quantité de récoltes</th>
                <th scope="col">Prenom du producteur</th>
                <th scope="col">Nom du producteur</th>
                <th scope="col">Région du producteur</th>
                <th scope="col">Nom du cru</th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < 10; $i++) {
                $numero = $i + 1;
                echo('<tr><td>'.$numero.'</td>
                        <td>' . $results[$i]['quantite'] . '</td>
                        <td>' . $results[$i]['prenom'] . '</td>
                        <td>' . $results[$i]['nom'] . '</td>
                        <td>' . $results[$i]['region'] . '</td>
                        <td>' . $results[$i]['cru'] . '</td>
                        </tr>');
            }

            ?>
            </tbody>
        </table>

        <h3>Reste du classement :</h3><br>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Quantité de récoltes</th>
                <th scope="col">Prenom du producteur</th>
                <th scope="col">Nom du producteur</th>
                <th scope="col">Région du producteur</th>
                <th scope="col">Nom du cru</th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 10; $i < $resultsLength; $i++) {
                $numero2 = $i + 1;
                echo('<tr><td>'.$numero2.'</td>
                        <td>' . $results[$i]['quantite'] . '</td>
                        <td>' . $results[$i]['prenom'] . '</td>
                        <td>' . $results[$i]['nom'] . '</td>
                        <td>' . $results[$i]['region'] . '</td>
                        <td>' . $results[$i]['cru'] . '</td>
                        </tr>');
            }

            ?>
            </tbody>
        </table>
    </div>

    <button class="btn btn-default" onclick="history.go(-1)">Back</button>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>