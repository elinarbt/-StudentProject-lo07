<?php
include ($root . '/app/controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax"></div>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <div style="margin-bottom: 20px">
        <h3>Problème de suppression du vin. Il est probable qu'il soit présent dans la table des récoltes. <br>
            Voici donc la liste des vins actuelle : <br>
        </h3>
    </div>

    <table class = "table table-striped table-bordered">
        <thead>
        <tr>
            <th scope = "col">id</th>
            <th scope = "col">cru</th>
            <th scope = "col">année</th>
            <th scope = "col">degré</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // La liste des vins est dans une variable $results
        foreach ($results as $element) {
            printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.2f</td></tr>", $element->getId(), $element->getCru(), $element->getAnnee(), $element->getDegre());
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

