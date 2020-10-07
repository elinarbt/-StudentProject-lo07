<?php
require_once '../model/ModelProducteur.php';

class ControllerProducteur
{
    public static function caveAccueil()
    {
        include 'config.php';
        $vue = $root . '/app/view/viewCaveAccueil.html';
        if (DEBUG)
            echo("ControllerProducteur : caveAccueil : vue = $vue");
        require $vue;
    }

    public static function prodReadAll()
    {
        $results = ModelProducteur::getAll();
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        if (DEBUG)
            echo("ControllerProducteur : prodReadAll : vue = $vue");
        require $vue;
    }

    public static function prodReadId()
    {
        $results = ModelProducteur::getAllId();

        include 'config.php';
        $vue = $root . '/app/view/producteur/viewId.php';
        require $vue;
    }

    public static function prodReadOne()
    {
        $prod_id = $_GET['id'];
        $results = ModelProducteur::getOne($prod_id);

        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        require $vue;
    }

    public static function prodCreate()
    {
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInsert.php';
        require $vue;
    }

    public static function prodCreated()
    {
        $results = ModelProducteur::insert(
            htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
        );

        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInserted.php';
        require($vue);
    }
    public static function prodReadDistinct()
    {
        $results = ModelProducteur::prodReadDistinct();
        include 'config.php';
        $vue = $root.'/app/view/producteur/viewDistinct.php';
        if (DEBUG)
            echo("ControllerProducteur : prodReadDistinct : vue = $vue");
        require $vue;
    }
}