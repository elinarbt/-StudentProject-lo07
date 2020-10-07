<?php
include ($root . '/app/controller/config.php');;
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root.'/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <div style="margin-bottom: 20px">
        <h3>Le producteur numéro <?php echo $id_prodDeleted ?> a bien été supprimé.
            <br> Voici la nouvelle liste des producteurs : <br>
        </h3>
    </div>

    <table class = "table table-striped table-bordered">
        <thead>
        <tr>
            <th scope = "col">id</th>
            <th scope = "col">nom</th>
            <th scope = "col">prenom</th>
            <th scope = "col">region</th>
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