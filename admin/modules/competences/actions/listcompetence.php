<?php

    //include config
    include("../../../../config/config.php");

    if($_SESSION['c_user']->privilege != 0) {
        header("Location: index.html");
    }
    
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    require_once "../../../../class/business/Competence.php";

    $users_filtre = new Competence();
    define('fromajax',true);

    //UserDAO.class.php requires
    require_once "../../../../class/business/Competence.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/ICompetenceDAO.interface.php";

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
    
    $collabs = DAOFactory::getDAOFactory()->getCompetenceDAO()->selectCompetence();
    header("Content-type: text/xml");
    echo "<?xml version='1.0' encoding='utf-8'?>\n";
    echo "<collabs total=\"".count(DAOFactory::getDAOFactory()->getCompetenceDAO()->selectCompetence())."\">\n";
    foreach ($collabs as $collab){
        echo "<collab>\n";
            echo "<collab_id>".$collab["id_competence"]."</collab_id>";
            echo "<collab_nom>".$collab["nom_competence"]."</collab_nom>";
            echo "<collab_prenom>".$collab["description_competence"]."</collab_prenom>";
        echo "</collab>\n";
     }
     echo "</collabs>\n";
?>
