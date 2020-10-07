<!-- ----- debut Router1 -->
<?php
require('../controller/ControllerVin.php');
require('../controller/ControllerProducteur.php');
require('../controller/ControllerRecolte.php');
require ('../controller/ControllerSearch.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

//Modification du routeur pour prendre en compte l'ensemble des paramètres
$action = $param['action'];
//On supprime l'élément action de la structure
unset($param['action']);

//Tout ce qui reste sont les arguments
$args = $param;


// --- Liste des méthodes autorisées
switch ($action) {
    case "vinReadAll" :
    case "vinReadOne" :
    case "vinReadId" :
    case "vinCreate" :
    case "vinCreated" :
    case "vinDeleted";
        ControllerVin::$action($args);
        break;
    case "prodReadAll" :
    case "prodReadOne" :
    case "prodReadId" :
    case "prodCreate" :
    case "prodCreated" :
    case "prodReadDistinct" :
    case "prodDeleted":
        ControllerProducteur::$action($args);
        break;
    case "recolteRegion" :
    case "recolteProdSearch" :
    case "recolteClassement" :
    case "recolteCreate" :
    case "recolteReadAll" :
    case "recolteProdPicked" :
    case "recolteCreated" :
        ControllerRecolte::$action($args);
        break;
    case "recolteRegionSelected" :

        if (isset($_GET['button_region'])) {
            $args = $_GET['button_region'];
        }
        ControllerRecolte::$action($args);
        break;

    case "propositions" :
        include "../../public/documentation/mesPropositions.php";
        break;
    case "monProjet" :
        include "../../public/documentation/monProjet.php";
        break;

    case "searchVin" :
    case "searchProd" :
    case "searchProdRecolte" :
        if (isset($_GET['searching'])){
            $args = $_GET['searching'];
        }
        ControllerSearch::$action($args);
        break;

    // Tache par défaut
    default:
        $action = "caveAccueil";
        ControllerVin::$action($args);
}
?>
<!-- ----- Fin Router1 -->

