<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax3">
    <div class="titre">
        Découvrez nos récoltes par régions !
    </div>
</div>
</body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    ?>

    <form action="router2.php" method="get" role="form">
        <input type="hidden" name="action" value="<?php echo $target; ?>">
        <?php
        foreach ($results as $region) {
            echo('<div class="jumbotron2">
                    <h1>' .$region.'</h1>    
                    <button class="buttonRegion" type="submit" name="button_region" value="'.$region.'" > > </button>
                 </div>');
        }
        ?>

    </form>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>