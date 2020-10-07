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
    ?>

    <form class="navbar-form navbar-left" role="search" method="get" action="router2.php">
        <h3>Retrouvez le producteur que vous cherchez en entrant son nom :</h3>
        <input type="hidden" name="action" value="searchProdRecolte">
        <div class="form-group">
            <input name="searching" type="text" class="form-control" placeholder="Rechercher...">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>