<?php
require_once '../model/ModelSearch.php';
require_once '../model/ModelRecolte.php';

class ControllerSearch
{
    public static function searchVin($args)
    {
        $results = ModelSearch::getSearchVin($args);
        $resultsLength = count($results);

        include 'config.php';
        $vue = $root . '/app/view/search/searchResultVin.php';
        require $vue;
    }

    public static function searchProd($args)
    {
        $results = ModelSearch::getSearchProd($args);
        $resultsLength = count($results);

        include 'config.php';
        $vue = $root . '/app/view/search/searchResultProd.php';
        require $vue;
    }

    public static function searchProdRecolte($args)
    {
        $results = ModelRecolte::getProdSelected($args);
        $resultsLength = count($results);

        include 'config.php';
        $vue = $root . '/app/view/recolte/viewProdSelected.php';
        require $vue;
    }
}