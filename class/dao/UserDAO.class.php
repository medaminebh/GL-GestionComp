<?php
if(!defined('fromajax')){
    require_once "class/business/User.php";

    require_once "lib/functions.php";

    require_once "IUserDAO.interface.php";
}

ini_set('display_errors', 'On');
        error_reporting(E_ALL);

/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MYSQLAdminDAO
 *
 * @author Med Amine
 */

final class UserDAO implements IUserDAO {
    private $table = "user";
    private static $instance = null;
    private $cnx;

    private function __construct(){
        try{
            $this->cnx = Singleton::getInstance()->getConnection();
        }catch(PDOException $e) {
            echo "Error : ".$e->getMessage()."<br />";
            echo "Code : ".$e->getCode();
            die();
        }
    }

    public static function getUserDAO() {
        if(!self::$instance instanceof self){
            self::$instance = new UserDAO();
        }
        return self::$instance;
    }

    public function insertUser($user){
        // return boolean
        $added = false;
        $test_exist_user = new User(array('email' => $user->getEmail()));
        if($this->findUser($test_exist_user)) {
            return $added;
        } elseif(!$this->findUser($test_exist_user)){
            try {
                $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $this->cnx->prepare(insertQuery($user, $this->table));
                bindValQuery($user, $this->table, $stmt);
                
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

    /*public function deleteUser($id){
        // return boolean
    }*/

    /*public function updateUser($user){
        // return User
    }*/

    /*public  function getUserInfo($id){
        $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $this->cnx->prepare("SELECT * FROM user where id_user= :id ");
        $stmt->bindValue(':id', $id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $arrValues = $stmt->fetchAll();
        return $arrValues;
    }*/

    public function findUser($user){
        // return boolean
        $exist = false;
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($user, $this->table)." LIMIT 1");
            bindValQuery($user, $this->table, $stmt);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_OBJ);

            if ($user) {
                $exist = true;
            }

            $stmt->closeCursor();
            return $exist;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $exist;
        }
    }

    public function selectUser($user){
        // return User
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($user, $this->table)." LIMIT 1");
            bindValQuery($user, $this->table, $stmt);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            
            $stmt->closeCursor();

            return $user;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $user;
        }
    }

    public function selectUsers($users_filtre, $limit = ""){
        // return array of Users
        try {
            $this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $this->cnx->prepare(selectQuery($users_filtre, $this->table).$limit);
            bindValQuery($users_filtre, $this->table, $stmt);
            $stmt->execute();
            $users = $stmt->fetchAll();

            $stmt->closeCursor();

            return $users;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return $user;
        }
    }

}
?>
