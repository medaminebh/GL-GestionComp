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

    public function deleteCompetence($competence){
        // return boolean
        $deleted = false;
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(deleteQuery($competence, $this->table));
            bindValQuery($competence, $this->table, $stmt);

            if($stmt->execute()) {
                $deleted = true;
            }

            $stmt->closeCursor();
            return $deleted;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $deleted;
        }
    }

    public function updateCompetence($competence){
        // return boolean
        $updated = false;
        $test_exist_competence = new Competence(array('id_competence' => $user->getId_Competence()));
        if($this->findCompetence($test_exist_competence)) {
            try {
                $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $this->cnx->prepare(updateQuery($competence, $this->table));
                bindValQuery($competence, $this->table, $stmt);

                if($stmt->execute()) {
                    $updated = true;
                }

                $stmt->closeCursor();

                return $updated;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return $updated;
            }
        }
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

    public function selectCompetence($competence){
        // return User
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($competence, $this->table)." LIMIT 1");
            bindValQuery($competence, $this->table, $stmt);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            
            $stmt->closeCursor();

            return $competence;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $competence;
        }
    }

    public function selectCompetences($competences_filtre, $limit = ""){
        // return array of Users
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($competences_filtre, $this->table).$limit);
            bindValQuery($competences_filtre, $this->table, $stmt);
            $stmt->execute();
            $users = $stmt->fetchAll();

            $stmt->closeCursor();

            return $competences;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $competence;
        }
    }

}
?>
