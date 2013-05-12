<?php
if(!defined('fromajax')){
    require_once "class/business/Service.php";

    require_once "lib/functions.php";

    require_once "IServiceDAO.interface.php";
}

ini_set('display_errors', 'On');
        error_reporting(E_ALL);

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


final class ServiceDAO implements IServiceDAO {
    private $table = "service";
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

    public static function getServiceDAO() {
        if(!self::$instance instanceof self){
            self::$instance = new ServiceDAO();
        }
        return self::$instance;
    }

    public function insertService($service){
        // return boolean
        $added = false;
        $test_exist_service = new Service(array('nom_service' => $service->getNomService()));
        if($this->findService($test_exist_service)) {
            return $added;
        } elseif(!$this->findService($test_exist_service)){
            try {
                $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $this->cnx->prepare(insertQuery($service, $this->table));
                bindValQuery($service, $this->table, $stmt);

                if($stmt->execute()) {
                    $added = true;
                }

                $stmt->closeCursor();

                return $added;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return $added;
            }
        }
    }

    public function deleteService($service){
        // return boolean
        $deleted = false;
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(deleteQuery($service, $this->table));
            bindValQuery($service, $this->table, $stmt);

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

    public function updateService($service){
        // return boolean
        $updated = false;
        $test_exist_service = new Service(array('id_service' => $service->getId_Service()));
        if($this->findService($test_exist_service)) {
            try {
                $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $this->cnx->prepare(updateQuery($service, $this->table));
                bindValQuery($service, $this->table, $stmt);

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

    public function findService($service){
        // return boolean
        $exist = false;
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($service, $this->table)." LIMIT 1");
            bindValQuery($service, $this->table, $stmt);
            $stmt->execute();
            $service = $stmt->fetch(PDO::FETCH_OBJ);

            if ($service) {
                $exist = true;
            }

            $stmt->closeCursor();
            return $exist;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $exist;
        }
    }

    public function selectService($service){
       	// return Service
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($service, $this->table)." LIMIT 1");
            bindValQuery($service, $this->table, $stmt);
            $stmt->execute();
            $service = $stmt->fetch(PDO::FETCH_OBJ);

            $stmt->closeCursor();

            return $service;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $service;
        }
    }

    public function selectServices($services_filtre, $limit = ""){
       // return array of Services
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($services_filtre, $this->table).$limit);
            bindValQuery($services_filtre, $this->table, $stmt);
            $stmt->execute();
            $services = $stmt->fetchAll();

            $stmt->closeCursor();

            return $services;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $services;
        }
    }

}
?>
