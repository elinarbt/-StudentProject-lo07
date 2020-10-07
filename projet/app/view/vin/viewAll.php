<!-- ----- début viewAll -->
<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax">
    <div class="titre">
        Découvrez nos vins...
    </div>
</div>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <form class="navbar-form navbar-right" role="search" method="get" action="router2.php">
        <label for="title">Trouvez les caractéristiques de votre vin en tapant le nom du cru recherché : </label>
        <input type="hidden" name="action" value="searchVin">
        <div class="form-group">
            <input name="searching" type="text" class="form-control" placeholder="Rechercher...">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">cru</th>
            <th scope="col">année</th>
            <th scope="col">degré</th>
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

<!-- ----- fin viewAll -->