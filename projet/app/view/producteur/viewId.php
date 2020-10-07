<?php
include ($root . '/app/controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
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

    <form role="form" method='get' action='router2.php'>
        <div class="form-group">
            <input type="hidden" name='action' value='<?php echo($target);?>'>
            <label for="id">id : </label> <select class="form-control" id='id' name='id' style="width: 100px">
                <?php
                foreach ($results as $id) {
                    echo ("<option>$id</option>");
                }
                ?>
            </select>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>

<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>
