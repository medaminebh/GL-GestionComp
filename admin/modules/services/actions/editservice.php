<?php

//include config
include("../../../../config/config.php");

if($_SESSION['c_user']->privilege != 0) {
    header("Location: index.html");
}

require_once "../../../../class/business/Service.php";

if (isset($_COOKIE['servicetoedit']) && is_numeric($_COOKIE['servicetoedit']) && intval($_COOKIE['servicetoedit']) > 0) {

    $service = new Service(array('id_service' => htmlspecialchars(intval($_COOKIE['servicetoedit']))));
    setcookie('servicetoedit', null, -3600, '/');
    unset($_COOKIE['servicetoedit']);

    define('fromajax', true);
    define('forservice',true);

    //ServiceDAO.class.php requires
    require_once "../../../../class/business/Service.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IServiceDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    $service = DAOFactory::getDAOFactory()->getServiceDAO()->selectService($service);
    if ($service) {
        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='utf-8'?>\n";
        echo "<services>\n";
        echo "<service>\n";
        echo "<service_id>" . $service->id_service . "</service_id>";
        echo "<service_nom>" . $service->nom_service . "</service_nom>";
        echo "<service_description>" . $service->description_service . "</service_description>";
        echo "</service>\n";
        echo "</services>\n";
    }
} else if (isset($_POST['submit'])) {
    $service = array();

    if (isset($_POST['id_service']) && is_numeric($_POST['id_service']) && intval($_POST['id_service']) > 0) {
        $service['id_service'] = intval($_POST['id_service']);
    } else {
        echo "id_service";
        die();
    }

    if(isset($_POST['nom_service'])){
       $service['nom_service'] = $_POST['nom_service'];
    }else{
        echo "nom_service";
        die();
    }

    if(isset($_POST['description_service'])){
       $service['description_service'] = $_POST['description_service'];
    }else{
        echo "description_service";
        die();
    }

    $service = new Service($service);

    define('fromajax', true);
    define('forservice',true);

    //ServiceDAO.class.php requires
    require_once "../../../../class/business/Service.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IServiceDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    $result = DAOFactory::getDAOFactory()->getServiceDAO()->updateService($service);

    if ($result) {
        echo "1";
    } else {
        echo "0";
    }
} else {
    die();
}
?>
