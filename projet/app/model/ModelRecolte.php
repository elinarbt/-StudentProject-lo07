<?php
require_once 'Model.php';

class ModelRecolte
{
    private $vin_id, $prod_id, $quantite;

    /**
     * @return null
     */
    public function getVinId()
    {
        return $this->vin_id;
    }

    /**
     * @return null
     */
    public function getProdId()
    {
        return $this->prod_id;
    }

    /**
     * @return null
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    public function __construct($vin_id = NULL, $prod_id = NULL, $quantite = NULL)
    {
        if (!is_null($vin_id) && !is_null($prod_id)) {
            $this->vin_id = $vin_id;
            $this->prod_id = $prod_id;
            $this->quantite = $quantite;
        }
    }

    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from recolte";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");

            $lengthArray = count($results);
            $results2 = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $results2[] = get_object_vars($results[$i]);
            }
            return $results2;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    static public function getRegionOfRecolte()
    {
        try {
            $database = Model::getInstance();
            $query = 'SELECT DISTINCT region FROM producteur JOIN recolte ON recolte.producteur_id = producteur.id';
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");

            $lengthArray = count($result1);
            $results = [];
            $regions = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $results[] = get_object_vars($result1[$i]);
                $regions[] = $results[$i]['region'];
            }

            return $regions;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    static public function getRegionSelected($args)
    {
        $regionSelected = $args;
        try {
            $database = Model::getInstance();
            $query = "SELECT nom, prenom, quantite, cru FROM producteur JOIN recolte ON recolte.producteur_id = producteur.id JOIN vin ON vin.id = recolte.vin_id WHERE region = '{$regionSelected}'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");

            $lengthArray = count($result1);
            $results = [];
            $recoltes = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $results[] = get_object_vars($result1[$i]);
                $recoltes[] = $results[$i];
            }
            return $recoltes;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getProdSelected($args){
        $prodSelected = $args;

        try {
            $database = Model::getInstance();
            $query = "SELECT nom, prenom, region, quantite, cru, producteur.id FROM producteur
                    JOIN recolte ON recolte.producteur_id = producteur.id
                    JOIN vin ON vin.id = recolte.vin_id
                    WHERE nom = '{$prodSelected}'";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");

            $lengthArray = count($result1);
            $results = [];
            $recoltes = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $results[] = get_object_vars($result1[$i]);
                $recoltes[] = $results[$i];
            }

            return $recoltes;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getClassementRecoltes(){
        try {
            $database =Model::getInstance();
            $query = "SELECT nom, prenom, region, quantite, cru FROM recolte
                    JOIN producteur ON recolte.producteur_id = producteur.id
                    JOIN vin ON vin.id = recolte.vin_id ORDER BY quantite DESC";
            $statement = $database->prepare($query);
            $statement->execute();
            $result1 = $statement->fetchAll(PDO::FETCH_CLASS, 'ModelRecolte');
            $lengthArray = count($result1);
            $listeMeilleuresRecoltes = [];

            for ($i = 0; $i < $lengthArray; $i++) {
                $listeMeilleuresRecoltes[] = get_object_vars($result1[$i]);
            }

            return $listeMeilleuresRecoltes;
        } catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($producteur_id, $vin_id, $quantite){
        try {
            $database = Model::getInstance();
            $query = "insert into recolte value (:producteur_id, :vin_id, :quantite)";
            $statement = $database->prepare($query);
            $statement->execute([
                'producteur_id' => $producteur_id,
                'vin_id' => $vin_id,
                'quantite' => $quantite
            ]);
            $newRecolte = array(1 => $producteur_id, $vin_id, $quantite);
            return $newRecolte;

        } catch (PDOException $e){
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }
}