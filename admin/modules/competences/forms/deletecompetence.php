
<?php 
require_once("config/config.php");
 require_once "class/business/Competence.php";
 require_once "class/dao/CompetenceDAO.class.php";
$comp = new CompetenceDAO();
$comp->deleteCompetence($_GET["id"]);
header('Location: http://www.google.com');

?>
