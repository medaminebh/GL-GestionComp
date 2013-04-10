<?php

    require_once "class/business/Competence.php";

    require_once "lib/functions.php";

    require_once "ICompetenceDAO.interface.php";
	
	require_once "class/technique/Singleton.class.php";


ini_set('display_errors', 'On');
        error_reporting(E_ALL);

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


final class CompetenceDAO implements ICompetenceDAO {
    private $table = "competence";
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

    public function insertCompetence($Competence){
		$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
	$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "Insert into competence (nom_competence, description_competence, niveau)Values (:nom_competence,:description_competence,:niveau)";

	$stmt = $con->prepare( $sql );
	$stmt->bindValue( "nom_competence", $Competence->getNomCompetence(), PDO::PARAM_STR );
	$stmt->bindValue( "description_competence", $Competence->getDescCompetence(), PDO::PARAM_STR );
	$stmt->bindValue( "niveau", $Competence->getNiveau(), PDO::PARAM_STR );
	$stmt->execute();
           
    }

    public function deleteCompetence($id){
        
        $con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
	$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "delete from competence where id_competence=:id_competence;";

	$stmt = $con->prepare( $sql );
	$stmt->bindValue( "id_competence", $id, PDO::PARAM_STR );
	
	$stmt->execute();
    }

    public function updateCompetence($competence,$id){
        
        $con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); 
	$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$sql = "Update competence set nom_competence=:nom_competence,description_competence=:description_competence where id_competence=:id_competence";

	$stmt = $con->prepare( $sql );
	$stmt->bindValue( "nom_competence", $competence->getNomCompetence(), PDO::PARAM_STR );
	$stmt->bindValue( "description_competence", $competence->getDescCompetence(), PDO::PARAM_STR );
	$stmt->bindValue( "id_competence", $id, PDO::PARAM_STR );
	$stmt->execute();
    }

    public function findCompetence($competence){
        // return boolean
        $exist = false;
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($competence, $this->table)." LIMIT 1");
            bindValQuery($competence, $this->table, $stmt);
            $stmt->execute();
            $competence = $stmt->fetch(PDO::FETCH_OBJ);

            if ($competence) {
                $exist = true;
            }

            $stmt->closeCursor();
            return $exist;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $exist;
        }
    }

    public function selectCompetence(){
       	$this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $this->cnx->prepare("SELECT * FROM competence");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$arrValues = $stmt->fetchAll();
		return $arrValues;
    }

    public function selectCompetences($id){
       
       	$this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $this->cnx->prepare("SELECT * FROM competence where id_competence=:id_competence");
		$stmt->bindValue(':id_competence', $id);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$arrValues = $stmt->fetchAll();
		return $arrValues;
    }

}
?>
