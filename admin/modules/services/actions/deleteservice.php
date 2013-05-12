<?php

    //include config
    include("../../../../config/config.php");

    if($_SESSION['c_user']->privilege != 0) {
        header("Location: index.html");
    }

    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    if (isset($_POST['id'])&& !empty($_POST['id'])) {
        $ids = explode("-", htmlspecialchars($_POST['id']), 8);

        require_once "../../../../class/business/Service.php";

        define('fromajax',true);
        define('forservice', true);

        //ServiceDAO.class.php requires
        require_once "../../../../class/business/Service.php";
        require_once "../../../../lib/functions.php";
        require_once "../../../../class/dao/IServiceDAO.interface.php";

        //DAOFactroy.class.php requires
        require_once "../../../../class/technique/Singleton.class.php";

        require_once "../../../../class/dao/DAOFactory.class.php";

        foreach ($ids as $id) {
            $service = new Service(array('id_service' => $id));
            $exist = DAOFactory::getDAOFactory()->getServiceDAO()->findService($service);
            if($exist){
                $deleted = DAOFactory::getDAOFactory()->getServiceDAO()->deleteService($service);
                if(!$deleted) {
                    die();
                }
            } else {
                echo "0";
                die();
            }
        }
        echo "1";
    }
?>
