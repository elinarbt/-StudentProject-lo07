<?php
include($root . '/app/controller/config.php');;
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax2">
    <div class="titre">
        Découvrez nos producteurs...
    </div>
</div>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <form class="navbar-form navbar-right" role="search" method="get" action="router2.php">
        <label for="title">Trouvez les caractéristiques d'un producteur en rentrant son nom : </label>
        <input type="hidden" name="action" value="searchProd">
        <div class="form-group">
            <input name="searching" type="text" class="form-control" placeholder="Rechercher...">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">region</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // La liste des vins est dans une variable $results
        foreach ($results as $element) {
            printf("
                        <tr>
                            <td>{$element->getId()}</td>
                            <td>{$element->getNom()}</td>
                            <td>{$element->getPrenom()}</td>
                            <td>{$element->getRegion()}</td>
                ");
        }
        ?>
        </tbody>
    </table>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

</div>
</body>
