<?php
include ($root . '/app/controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax2">
    <div class="titre">
        Vous voulez inscrire un nouveau producteur ? <br>
        Allez-y !
    </div>
</div>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>

    <form role="form" method='get' action='router2.php'>
        <div class="form-group">
            <input type="hidden" name='action' value='prodCreated'>
            <label for="id">nom : </label><input type="text" name='nom' size='75' value=''>
            <label for="id">prenom : </label><input type="text" name='prenom' value=''>
            <label for="id">region : </label><input type="text" name='region' value=''>
        </div>
        <button class="btn btn-primary" type="submit">Go</button>
    </form>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>
