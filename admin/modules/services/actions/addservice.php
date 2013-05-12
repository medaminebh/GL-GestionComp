<?php

//include config
include("../../../../config/config.php");

if($_SESSION['c_user']->privilege != 0) {
    header("Location: index.html");
}

require_once "../../../../class/business/Service.php";


/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST['submit'])) {
    $service = array();

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

    $service['date_creation_service'] = date("Y-m-d");
        
    $service = new Service($service);

    define('fromajax',true);
    define('forservice', true);

    //ServiceDAO.class.php requires
    require_once "../../../../class/business/Service.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IServiceDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    $result = DAOFactory::getDAOFactory()->getServiceDAO()->insertService($service);

    if($result){
        echo "1";
    }
    else{
        echo "0";
    }
}else{
    die();
}
?>
