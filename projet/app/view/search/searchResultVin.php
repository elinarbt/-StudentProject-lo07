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
    if ($resultsLength == 0){
        echo ("<h4>Le nom de cru que vous avez rentré n'existe pas. <br>
                    Peut-être avez vous fait une faute de frappe.</h4>");
    } else {
    ?>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">cru</th>
            <th scope="col">annee</th>
            <th scope="col">degre</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < $resultsLength; $i++) { ?>
            <tr>
                <td><?php echo $results[$i]['id']; ?></td>
                <td><?php echo $results[$i]['cru']; ?></td>
                <td><?php echo $results[$i]['annee']; ?></td>
                <td><?php echo $results[$i]['degre']; ?></td>
            </tr>
        <?php }
        }
        ?>
        </tbody>
    </table>
    <button class="btn btn-default" onclick="history.go(-1)">Back</button>
</div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>
