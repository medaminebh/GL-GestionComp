<?php

    require_once "class/business/Manager.php";

    require_once "lib/functions.php";

    require_once "ICompetenceDAO.interface.php";
	
	require_once "class/technique/Singleton.class.php";


ini_set('display_errors', 'On');
        error_reporting(E_ALL);

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


final class ManagerDAO implements IManagerDAO {
    private $table = "user";
    private static $instance = null;
    private $cnx;

    public function __construct(){
        try{
            $this->cnx = Singleton::getInstance()->getConnection();
        }catch(PDOException $e) {
            echo "Error : ".$e->getMessage()."<br />";
            echo "Code : ".$e->getCode();
            die();
        }
    }

    public static function getCompetenceDAO() {
        if(!self::$instance instanceof self){
            self::$instance = new CompetenceDAO();
        }
        return self::$instance;
    }

    public function insertManager($manager){
		$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
	$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "Insert into competence (nom_competence, description_competence, niveau)Values (:nom_competence,:description_competence,:niveau)";

	$stmt = $con->prepare( $sql );
	$stmt->bindValue( "nom_competence", $Competence->getNomCompetence(), PDO::PARAM_STR );
	$stmt->bindValue( "description_competence", $Competence->getDescCompetence(), PDO::PARAM_STR );
	$stmt->bindValue( "niveau", $Competence->getNiveau(), PDO::PARAM_STR );
	$stmt->execute();
           
    }


}
?>
