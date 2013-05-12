<?php

    //include config
    include("../../../../config/config.php");

    if($_SESSION['c_user']->privilege != 1) {
        header("Location: index.html");
    }

    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    if (isset($_POST['id'])&& !empty($_POST['id'])) {
        $ids = explode("-", htmlspecialchars($_POST['id']), 8);

        require_once "../../../../class/business/Projet.php";

        define('fromajax',true);
        define('forprojet',true);

        //UserDAO.class.php requires
        require_once "../../../../class/business/Projet.php";
        require_once "../../../../lib/functions.php";
        require_once "../../../../class/dao/IProjetDAO.interface.php";

        //DAOFactroy.class.php requires
        require_once "../../../../class/technique/Singleton.class.php";

        require_once "../../../../class/dao/DAOFactory.class.php";

        foreach ($ids as $id) {
            $projet = new Projet(array('id_projet' => $id));
            $exist = DAOFactory::getDAOFactory()->getProjetDAO()->findProjet($projet);
            if($exist){
                $deleted = DAOFactory::getDAOFactory()->getProjetDAO()->deleteProjet($projet);
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
