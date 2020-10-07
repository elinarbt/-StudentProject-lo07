<?php
require_once 'Model.php';

class ModelSearch
{
    public static function getSearchVin($args){
        $cruSearched = $args;

        try {
            $database = Model::getInstance();
            $query = "select * from vin where cru = :cru";
            $statement = $database->prepare($query);
            $statement->execute(['cru' => $cruSearched] );
            $results = $statement->fetchAll(PDO::FETCH_CLASS, 'ModelSearch');

            $lengthArray = count($results);
            $results2 = [];
            $searchResult = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $results2[] = get_object_vars($results[$i]);
                $searchResult[] = $results2[$i];
            }
            return $searchResult;
        } catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getSearchProd($args){
        $prodSearched =$args;

        try {
            $database = Model::getInstance();
            $query = "select * from producteur where nom = :nom";
            $statement = $database->prepare($query);
            $statement->execute(['nom' => $prodSearched]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, 'ModelSearch');

            $lengthArray = count($results);
            $results2 = [];
            $searchResult = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $results2[] = get_object_vars($results[$i]);
                $searchResult[] = $results2[$i];
            }
            return $searchResult;
        } catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
}