<?php
include($root . '/app/controller/config.php');
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax3">
    <div class="titre">
        Vous êtes producteurs et vous voulez participer aux récoltes de la Cave de l'utt...
    </div>
</div>
</body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    ?>
    <div class="jumbotron3" style="margin: auto;">
        <form role="form" method='get' action='router2.php'>
            <div class="form-group">
                <h3>Identifiez-vous en tant que producteur :</h3>
                <input type="hidden" name='action' value='recolteProdPicked'>
                <label for="id">id : </label> <select class="form-control" id='id' name='idProd' style="width: 100px">
                    <option value=".."></option>
                    <?php
                    foreach ($resultsProd as $id) {
                        echo ("<option>$id</option>");
                    }
                    ?>
                </select>
                <h3>Si votre vin fait partie de notre cave, choisissez son id :</h3>
                <label for="id">id :</label> <select class="form-control" name="idVin" id="idVin" style="width: 100px">
                    <option value=".."></option>
                    <?php
                    foreach ($resultsVin as $id){
                        echo ("<option>$id</option>");
                    }
                    ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Ok</button>
        </form>
        <form action="router2.php" method="get" role="form">
            <p>Vous êtes un nouveau producteur ? <button class="btn btn-success" type="submit" name="action" value="prodCreate">Inscrivez-vous !</button> </p>
        </form>
        <div>
            <form action="router2.php" method="get" role="form">
                <p>Vous avez récolté un nouveau vin ? <button class="btn btn-success" type="submit" name="action" value="vinCreate">Ajoutez-le !</button> </p>
            </form>
        </div>
        <div style="width: 100%;">
            <form class="navbar-form navbar-left" role="search" method="get" action="router2.php">
                <label for="title">N'hésitez pas à rechercher votre vin dans notre Cave, afin de connaître son identifiant : </label>
                <input type="hidden" name="action" value="searchVin">
                <div class="form-group">
                    <input name="searching" type="text" class="form-control" placeholder="Rechercher...">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </div>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>