<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

    <body>
<div class="parallax">
    <div class="titre">
        Découvrez nos récoltes...
    </div>
</div>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">producteur_id</th>
            <th scope="col">vin_id</th>
            <th scope="col">quantite</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < $lengthResults; $i++) {
            echo("
            <tr>
            <td>" . $results[$i]['vin_id'] . "</td>
            <td>" . $results[$i]['producteur_id'] . "</td>
            <td>" . $results[$i]['quantite'] . "</td>
            </tr>
            ");
        }

        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>