
<!-- ----- début viewInsert -->
 
<?php
include ($root . '/app/controller/config.php');
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="parallax">
    <div class="titre">
        Vous désirez ajouter un vin à notre cave ? <br>
        N'hésitez pas !
    </div>
</div>
<div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='vinCreated'>        
        <label for="id">cru : </label><input type="text" name='cru' size='75' value='Champagne de déconfinement'>                           
        <label for="id">annee : </label><input type="text" name='annee' value='2021'>
        <label for="id">degre : </label><input type="text" name='degre' value='17.24'>                
      </div>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



