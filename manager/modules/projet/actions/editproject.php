<?php


//include config
include("../../../../config/config.php");

if($_SESSION['c_user']->privilege != 1) {
    header("Location: index.html");
}

require_once "../../../../class/business/Projet.php";

if (isset($_COOKIE['projecttoedit']) && is_numeric($_COOKIE['projecttoedit']) && intval($_COOKIE['projecttoedit']) > 0) {

    $projet = new Projet(array('id_projet' => htmlspecialchars(intval($_COOKIE['projecttoedit']))));
    setcookie('projecttoedit', null, -3600, '/');
    unset($_COOKIE['projecttoedit']);

    define('fromajax', true);
    define('forprojet',true);

    //UserDAO.class.php requires
    require_once "../../../../class/business/Projet.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IProjetDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    $projet = DAOFactory::getDAOFactory()->getProjetDAO()->selectProjet($projet);
    if ($projet) {
        header("Content-type: text/xml");
        echo "<?xml version='1.0' encoding='utf-8'?>\n";
        echo "<projets>\n";
        echo "<projet>\n";
        echo "<projet_id>" . $projet->id_projet . "</projet_id>";
        echo "<projet_nom>" . $projet->nom_projet . "</projet_nom>";
        echo "<projet_description>" . $projet->description_projet . "</projet_description>";
        echo "</projet>\n";
        echo "</projets>\n";
    }
} else if (isset($_POST['submit'])) {
    $projet = array();

    if (isset($_POST['id_projet']) && is_numeric($_POST['id_projet']) && intval($_POST['id_projet']) > 0) {
        $projet['id_projet'] = intval($_POST['id_projet']);
    } else {
        echo "id_projet";
        die();
    }

    if(isset($_POST['nom_projet'])){
       $projet['nom_projet'] = $_POST['nom_projet'];
    }else{
        echo "nom_projet";
        die();
    }

    if(isset($_POST['description_projet'])){
       $projet['description_projet'] = $_POST['description_projet'];
    }else{
        echo "description_projet";
        die();
    }

    $projet = new Projet($projet);

    define('fromajax', true);
    define('forprojet',true);

    //UserDAO.class.php requires
    require_once "../../../../class/business/Projet.php";
    require_once "../../../../lib/functions.php";
    require_once "../../../../class/dao/IProjetDAO.interface.php";

    //DAOFactroy.class.php requires
    require_once "../../../../class/technique/Singleton.class.php";

    require_once "../../../../class/dao/DAOFactory.class.php";

    $result = DAOFactory::getDAOFactory()->getProjetDAO()->updateProjet($projet);

    if ($result) {
        echo "1";
    } else {
        echo "0";
    }
} else {
    die();
}
?>
