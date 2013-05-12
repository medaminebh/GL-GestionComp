<?php

    //include config
    include("../../../../config/config.php");

    if($_SESSION['c_user']->privilege != 1) {
        header("Location: index.html");
    }
    
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    require_once "../../../../class/business/Projet.php";

    $users_filtre = new Projet(array('nom_projet' => $projet->getNomProjet());
    define('fromajax',true);
    define('forprojet', true);

    //ProjectDAO.class.php requires
    require_once "../../../../class/business/Projet.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IProjetDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    
    if(isset($_GET['begin']) && is_numeric($_GET['begin']) && isset($_GET['limit']) && is_numeric($_GET['limit'])){
    $begin = $_GET['begin'];
    $limit = $_GET['limit'];
    $limit = " LIMIT $begin, $limit";
    }else {
        $limit = "";
    }
    
    $projects = DAOFactory::getDAOFactory()->getProjetDAO()->selectProjets($users_filtre, $limit);
    header("Content-type: text/xml");
    echo "<?xml version='1.0' encoding='utf-8'?>\n";
    echo "<collabs total=\"".count(DAOFactory::getDAOFactory()->getProjetDAO()->selectProjets($users_filtre, ""))."\">\n";
    foreach ($projects as $project){
        echo "<project>\n";
            echo "<id_projet>".$project["id_projet"]."</id_projet>";
            echo "<nom_projet>".$project["nom_projet"]."</nom_projet>";
            echo "<description_projet>".$project["description_projet"]."</description_projet>";
            echo "<date_creation_projet>".$project["date_creation_projet"]."</date_creation_projet>";
			echo "<id_service>".$project["id_service"]."</id_service>";
        echo "</project>\n";
     }
     echo "</projects>\n";
?>