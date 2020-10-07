<!DOCTYPE html>
<?php include '../../app/view/fragment/fragmentCaveHeader.html'; ?>
<body>
<div class="container">
    <?php
    include '../../app/view/fragment/fragmentCaveMenu.html';
    include '../../app/view/fragment/fragmentCaveJumbotron.html'; ?>

    <div class="panel panel-primary">
        <div class="panel panel-heading"><h4>Problèmes rencontrés</h4></div>
        <div class="panel panel-body">
            <ul>
                <li><h4>Problèmes récurrents de chemins de répertoire.
                    Les chemins préalablement notés par un retour de fichier "../../" n'ont pas toujours été reconnus par le navigateur.
                    <br>
                    Il m'a été nécessaire de noter le chemin de cette manière : <br>
                    <blockquote>"include ($root . '/app/controller/config.php');"</blockquote><br>
                        Avec $root = '/home/etu/roberte1/www/lo07_tp/tp13_mvc1';<br><br>
                    Cela n'est dû qu'au simple fait de revoir comment l'organisation du projet est formé, et de voir quels fichiers aller chercher au bon endroit.
                    <br>
                    Rien de complexe mais cela demande du temps car il s'agit de travailler sur un projet que nous n'avons pas écrit nous-même.
                    </h4></li>
                <br>
                <li><h4>
                        Redéfinition du <em>DEBUG</em> : <br>
                        Dans ce projet, on appelle systématiquement le fichier <em>'config.php'</em>, ce qui redéfini à fois la constante <em>DEBUG</em>.
                        <br> De ce fait, une erreur revenait souvent : <br> <em>"Notice: Constant DEBUG already defined in /home/etu/roberte1/www/lo07_tp/tp13_mvc1/app/controller/config.php on line X".</em>
                        <br><br>Ainsi, pour éviter ce conflit, j'ai ajouté une condition dans le fichier <em>'config.php'</em> qui permet de définir cette constante seulement si elle n'a pas déjà été définie :
                        <br><blockquote>if(!defined('DEBUG'))define('DEBUG',TRUE/FALSE);</blockquote>
                    </h4></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-danger">
        <div class="panel-heading"><h4>Simplifications possibles</h4></div>
        <div class="panel-body">
            <h4>Dans ce projet précisément, le code est répétitif dans sa mise en forme. <br>
                Il pourrait par exemple être plus pratique de réunir certains fragments ensemble (header + menu) pour éviter d'inclure beaucoup de fois les mêmes fragments.</h4>
        </div>
    </div>
    <?php include '../../app/view/fragment/fragmentCaveFooter.html'; ?>
    <!-- ----- fin de la page cave_acceuil -->
</div>