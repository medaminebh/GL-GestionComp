<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function selectQuery($obj, $table){
    $sql = "";
    switch ($table){
        case "user":
        $user = array(
                    'login' => $obj->getLogin(),
                    'pwd' => $obj->getPwd(),
                    'email' => $obj->getEmail(),
                    'nom_user' => $obj->getNom_User(),
                    'prenom_user' => $obj->getPrenom_User(),
                    'genre' => $obj->getGenre(),
                    'hire_date' => $obj->getHire_Date(),
                    'id_service' => $obj->getId_Service(),
                    'privilege' => $obj->getPrivilege(),
                    'date_naiss' => $obj->getDate_Naiss(),
                    'etat_civil' => $obj->getEtat_Civil(),
                    'adresse' => $obj->getAdresse(),
                    'tel_mobile' => $obj->getTel_Mobile(),
                    'diplome' => $obj->getDiplome(),
                    'annee_dip' => $obj->getAnnee_Dip(),
                    'last_login' => $obj->getLast_Login(),
                    'expire_date' => $obj->getExpire_Date(),
                    'active' => $obj->getActive()
                  );
            $first = false;

        $sql = "SELECT * FROM ".$table;
        
        if(isset($user['login']) && !empty($user['login'])){
        $first = true;
        $sql.= ' WHERE login = :username';
        }
        
        if(isset($user['pwd']) && !empty($user['pwd'])){
            if($first){
                $sql.= ' AND pwd = :password';
            } else {
                $sql.= ' WHERE pwd = :password';
                $first = true;
            }
        }

        if(isset($user['email']) && !empty($user['email'])){
            if($first){
                $sql.= ' AND email = :email';
            } else {
                $sql.= ' WHERE email = :email';
                $first = true;
            }
        }

        if(isset($user['nom_user']) && !empty($user['nom_user'])){
            if($first){
                $sql.= ' AND nom_user = :nom_user';
            } else {
                $sql.= ' WHERE nom_user = :nom_user';
                $first = true;
            }
        }

        if(isset($user['prenom_user']) && !empty($user['prenom_user'])){
            if($first){
                $sql.= ' AND prenom_user = :prenom_user';
            } else {
                $sql.= ' WHERE prenom_user = :prenom_user';
                $first = true;
            }
        }

        if(isset($user['genre']) && !empty($user['genre'])){
            if($first){
                $sql.= ' AND genre = :genre';
            } else {
                $sql.= ' WHERE genre = :genre';
                $first = true;
            }
        }

        if(isset($user['hire_date']) && !empty($user['hire_date'])){
            if($first){
                $sql.= ' AND hire_date = :hire_date';
            } else {
                $sql.= ' WHERE hire_date = :hire_date';
                $first = true;
            }
        }

        if(isset($user['id_service']) && $user['id_service'] > 0){
            if($first){
                $sql.= ' AND id_service = :id_service';
            } else {
                $sql.= ' WHERE id_service = :id_service';
                $first = true;
            }
        }

        if(isset($user['privilege']) && $user['privilege'] >= 0){
            if($first){
                $sql.= ' AND privilege = :privilege';
            } else {
                $sql.= ' WHERE privilege = :privilege';
                $first = true;
            }
        }

        if(isset($user['date_naiss']) && !empty($user['date_naiss'])){
            if($first){
                $sql.= ' AND date_naiss = :date_naiss';
            } else {
                $sql.= ' WHERE date_naiss = :date_naiss';
                $first = true;
            }
        }

        if(isset($user['etat_civil']) && !empty($user['etat_civil'])){
            if($first){
                $sql.= ' AND etat_civil = :etat_civil';
            } else {
                $sql.= ' WHERE etat_civil = :etat_civil';
                $first = true;
            }
        }

        if(isset($user['adresse']) && !empty($user['adresse'])){
            if($first){
                $sql.= ' AND adresse = :adresse';
            } else {
                $sql.= ' WHERE adresse = :adresse';
                $first = true;
            }
        }

        if(isset($user['tel_mobile']) && !empty($user['tel_mobile'])){
            if($first){
                $sql.= ' AND tel_mobile = :tel_mobile';
            } else {
                $sql.= ' WHERE tel_mobile = :tel_mobile';
                $first = true;
            }
        }

        if(isset($user['diplome']) && !empty($user['diplome'])){
            if($first){
                $sql.= ' AND diplome = :diplome';
            } else {
                $sql.= ' WHERE diplome = :diplome';
                $first = true;
            }
        }

        if(isset($user['annee_dip']) && $user['annee_dip'] > 1930){
            if($first){
                $sql.= ' AND annee_dip = :annee_dip';
            } else {
                $sql.= ' WHERE annee_dip = :annee_dip';
                $first = true;
            }
        }

        if(isset($user['last_login']) && !empty($user['last_login'])){
            if($first){
                $sql.= ' AND last_login = :last_login';
            } else {
                $sql.= ' WHERE last_login = :last_login';
                $first = true;
            }
        }

        if(isset($user['expire_date']) && !empty($user['expire_date'])){
            if($first){
                $sql.= ' AND expire_date = :expire_date';
            } else {
                $sql.= ' WHERE expire_date = :expire_date';
                $first = true;
            }
        }

        if(isset($user['active']) && ($user['active'] == 0 || $user['active'] == 1) ){
            if($first){
                $sql.= ' AND active = :active';
            } else {
                $sql.= ' WHERE active = :active';
                $first = true;
            }
        }
        break;
    default :
        break;
    }
    return $sql;
}

function insertQuery($obj, $table){
    $sql = "";
    switch ($table){
        case "user":
        $user = array(
                    'login' => $obj->getLogin(),
                    'pwd' => $obj->getPwd(),
                    'email' => $obj->getEmail(),
                    'nom_user' => $obj->getNom_User(),
                    'prenom_user' => $obj->getPrenom_User(),
                    'genre' => $obj->getGenre(),
                    'hire_date' => $obj->getHire_Date(),
                    'id_service' => $obj->getId_Service(),
                    'privilege' => $obj->getPrivilege(),
                    'date_naiss' => $obj->getDate_Naiss(),
                    'etat_civil' => $obj->getEtat_Civil(),
                    'adresse' => $obj->getAdresse(),
                    'tel_mobile' => $obj->getTel_Mobile(),
                    'diplome' => $obj->getDiplome(),
                    'annee_dip' => $obj->getAnnee_Dip(),
                    'last_login' => $obj->getLast_Login(),
                    'expire_date' => $obj->getExpire_Date(),
                    'active' => $obj->getActive()
                  );
            $first = false;

        $sql = "INSERT INTO ".$table;
        $sql.= ' (login, pwd, email, nom_user, prenom_user, genre, hire_date, id_service, privilege, date_naiss, etat_civil, adresse, tel_mobile, diplome, annee_dip, last_login, expire_date, active)';
        $sql.= ' VALUES';
        $sql.= ' (:username, :password, :email, :nom_user, :prenom_user, :genre, :hire_date, :id_service, :privilege, :date_naiss, :etat_civil, :adresse, :tel_mobile, :diplome, :annee_dip, :last_login, :expire_date, :active)';
        break;
    default :
        break;
    }
    return $sql;
}

function bindValQuery($obj, $table, $stmt){
    switch ($table){
        case "user":
        $user = array(
                    'login' => $obj->getLogin(),
                    'pwd' => $obj->getPwd(),
                    'email' => $obj->getEmail(),
                    'nom_user' => $obj->getNom_User(),
                    'prenom_user' => $obj->getPrenom_User(),
                    'genre' => $obj->getGenre(),
                    'hire_date' => $obj->getHire_Date(),
                    'id_service' => $obj->getId_Service(),
                    'privilege' => $obj->getPrivilege(),
                    'date_naiss' => $obj->getDate_Naiss(),
                    'etat_civil' => $obj->getEtat_Civil(),
                    'adresse' => $obj->getAdresse(),
                    'tel_mobile' => $obj->getTel_Mobile(),
                    'diplome' => $obj->getDiplome(),
                    'annee_dip' => $obj->getAnnee_Dip(),
                    'last_login' => $obj->getLast_Login(),
                    'expire_date' => $obj->getExpire_Date(),
                    'active' => $obj->getActive()
                  );
        
        if(isset($user['login']) && !empty($user['login']))
        $stmt->bindParam(':username', $user['login'], PDO::PARAM_STR);

        if(isset($user['pwd']) && !empty($user['pwd']))
        $stmt->bindParam(':password', $user['pwd'], PDO::PARAM_STR);

        if(isset($user['email']) && !empty($user['email']))
        $stmt->bindValue('email', $user['email'], PDO::PARAM_STR);

        if(isset($user['nom_user']) && !empty($user['nom_user']))
        $stmt->bindValue('nom_user', $user['nom_user'], PDO::PARAM_STR);

        if(isset($user['prenom_user']) && !empty($user['prenom_user']))
        $stmt->bindValue('prenom_user', $user['prenom_user'], PDO::PARAM_STR);

        if(isset($user['genre']) && !empty($user['genre']))
        $stmt->bindValue('genre', $user['genre'], PDO::PARAM_STR);

        if(isset($user['hire_date']) && !empty($user['hire_date']))
        $stmt->bindValue('hire_date', $user['hire_date'], PDO::PARAM_STR);

        if(isset($user['id_service']) && $user['id_service'] > 0)
        $stmt->bindValue('id_service', $user['id_service'], PDO::PARAM_INT);

        if(isset($user['privilege']) && $user['privilege'] >= 0)
        $stmt->bindValue('privilege', $user['privilege'], PDO::PARAM_INT);

        if(isset($user['date_naiss']) && !empty($user['date_naiss']))
        $stmt->bindValue('date_naiss', $user['date_naiss'], PDO::PARAM_STR);

        if(isset($user['etat_civil']) && !empty($user['etat_civil']))
        $stmt->bindValue('etat_civil', $user['etat_civil'], PDO::PARAM_STR);
        
        if(isset($user['adresse']) && !empty($user['adresse']))
        $stmt->bindValue('adresse', $user['adresse'], PDO::PARAM_STR);

        if(isset($user['tel_mobile']) && !empty($user['tel_mobile']))
        $stmt->bindValue('tel_mobile', $user['tel_mobile'], PDO::PARAM_INT);
        
        if(isset($user['diplome']) && !empty($user['diplome']))
        $stmt->bindValue('diplome', $user['diplome'], PDO::PARAM_STR);
        
        if(isset($user['annee_dip']) && $user['annee_dip'] > 1930)
        $stmt->bindValue('annee_dip', $user['annee_dip'], PDO::PARAM_INT);
        
        if(isset($user['last_login']) && !empty($user['last_login']))
        $stmt->bindValue('last_login', $user['last_login'], PDO::PARAM_STR);
        
        if(isset($user['expire_date']) && !empty($user['expire_date']))
        $stmt->bindValue('expire_date', $user['expire_date'], PDO::PARAM_STR);
        
        if(isset($user['active']) && ($user['active'] == 0 || $user['active'] == 1))
        $stmt->bindValue('active', $user['active'], PDO::PARAM_INT);
        break;
    default :
        break;
    }
}
?>
