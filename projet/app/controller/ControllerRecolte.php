<?php
require_once '../model/ModelRecolte.php';
require_once '../model/ModelProducteur.php';
require_once '../model/ModelVin.php';

class ControllerRecolte
{
    public static function recolteRegion($args){
        // Renvoie la liste des régions des producteurs ayant fait des récoltes
        $results = ModelRecolte::getRegionOfRecolte();
        $target = $args['target'];

        include 'config.php';
        $vue = $root.'/app/view/recolte/viewRegions.php';
        require $vue;
        return $target;
    }

    public static function recolteRegionSelected($args){
        $regionSelected = $args;
        $results = ModelRecolte::getRegionSelected($regionSelected);
        $resultsLength = count($results);

        include 'config.php';
        $vue = $root . '/app/view/recolte/viewOneRegion.php';
        require $vue;
    }

    public static function recolteProdSearch(){
        include 'config.php';
        $vue = $root.'/app/view/recolte/viewProdSearch.php';
        require $vue;
    }

    public static function recolteClassement(){
        $results = ModelRecolte::getClassementRecoltes();
        $resultsLength = count($results);

        include 'config.php';
        $vue = $root.'/app/view/recolte/viewRecolteClassement.php';
        require $vue;
    }

    public static function recolteCreate(){
        $resultsProd = ModelProducteur::getAllId();
        $resultsVin = ModelVin::getAllId();

        include 'config.php';
        $vue = $root.'/app/view/recolte/viewProdConnect.php';
        require $vue;
    }

    public static function recolteProdPicked(){
        $prod_id = $_GET['idProd'];
        $vin_id = $_GET['idVin'];
        $resultsProd = ModelProducteur::getOne($prod_id);
        $resultsVin = ModelVin::getOne($vin_id);

        include 'config.php';
        $vue = $root . '/app/view/recolte/viewNewRecolte.php';
        require $vue;
    }

    public static function recolteCreated(){
        $quantite = $_GET['quantite'];
        $prenomProd = $_GET['prenomProd'];
        $nomProd = $_GET['nomProd'];
        $idProd = $_GET['idProd'];
        $idVin = $_GET['idVin'];
        $cruVin = $_GET['cruVin'];
        $newRecolte = ModelRecolte::insert($idProd, $idVin, $quantite);

        include 'config.php';
        $vue = $root. '/app/view/recolte/viewRecolteCreated.php';
        require $vue;
    }

    public static function recolteReadAll($args){
        $results = ModelRecolte::getAll();
        $lengthResults = count($results);

        include 'config.php';
        $vue = $root.'/app/view/recolte/viewAll.php';
        if (DEBUG) echo ("ControllerRecolte : recolteReadAll : vue = $vue");
        require $vue;
    }
}