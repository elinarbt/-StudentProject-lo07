<?php
include ($root . '/app/controller/config.php');;
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax2">
    <div class="titre">
        Découvrez nos régions...
    </div>
</div>
    <div class="container">
        <?php
        include $root.'/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <table class = "table table-striped table-bordered">
            <thead>
            <tr>
                <th scope = "col">region</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // La liste des vins est dans une variable $results
            foreach ($results as $element) {
                printf("<tr><td>{$element->getRegion()}</td><tr>");
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    </div>
</body>

