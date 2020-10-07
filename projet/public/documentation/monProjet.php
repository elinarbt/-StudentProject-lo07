<!DOCTYPE html>
<?php include '../../app/view/fragment/fragmentCaveHeader.html'; ?>
<body>
<div class="container">
    <?php
    include '../../app/view/fragment/fragmentCaveMenu.html';
    ?>
    <div class="jumbotron3">
        <h2 style="text-align: center">Mon projet</h2>
        <div class="panel panel-success">
            <div class="panel-heading"><h4>Fonctionnalités</h4></div>
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <h4>
                        <dt>Site vitrine</dt>
                        <dd>Dans ce projet, j'ai voulu proposer aux utilisateurs de se renseigner à propos de la Cave de l'utt, en proposant :
                            <br>Liste des vins, liste des producteurs, puis liste des récoltes. <br><br>
                        </dd>
                        <dt>Recherche</dt>
                        <dd>Afin de retrouver les identifiants des vins ou des producteurs de notre table de données, j'ai rajouté une barre de recherche sur les listes de ceux-ci.
                            <br><br>
                        </dd>
                        <dt>Manipulation</dt>
                        <dd>
                            Il a été aussi ajouté des fonctionnalités de manipulation de données, autrement dit il est possible d'ajouter un vin, un producteur, voire une récolte.
                            <br>
                            Il est également possible de supprimer ceux_ci, sous conditions. <br><br>
                        </dd>
                        <dt>Classement</dt>
                        <dd>Un classement des plus grandes récoltes a été ajouté afin de motiver les producteurs à participer à cette compétition de récoltes.</dd>
                    </h4>
                </dl>
            </div>
        </div>
    </div>

    <?php include '../../app/view/fragment/fragmentCaveFooter.html'; ?>
    <!-- ----- fin de la page cave_acceuil -->
</div>