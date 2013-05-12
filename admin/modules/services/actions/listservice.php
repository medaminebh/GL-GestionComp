<?php

    //include config
    include("../../../../config/config.php");

    if($_SESSION['c_user']->privilege != 0) {
        header("Location: index.html");
    }
    
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    require_once "../../../../class/business/Service.php";

    $services_filtre = new Service(null);
    define('fromajax',true);
    define('forservice', true);

    //ServiceDAO.class.php requires
    require_once "../../../../class/business/Service.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IServiceDAO.interface.php";

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
    
    $services = DAOFactory::getDAOFactory()->getServiceDAO()->selectServices($services_filtre, $limit);
    header("Content-type: text/xml");
    echo "<?xml version='1.0' encoding='utf-8'?>\n";
    echo "<services total=\"".count(DAOFactory::getDAOFactory()->getServiceDAO()->selectServices($services_filtre, ""))."\">\n";
    foreach ($services as $service){
        echo "<service>\n";
            echo "<service_id>".$service["id_service"]."</service_id>";
            echo "<service_nom>".$service["nom_service"]."</service_nom>";
            echo "<service_description>".$service["description_service"]."</service_description>";
            echo "<service_date>".$service["date_creation_service"]."</service_date>";
        echo "</service>\n";
     }
     echo "</services>\n";
?>