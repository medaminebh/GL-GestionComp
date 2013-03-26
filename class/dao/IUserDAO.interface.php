<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Med Amine
 */
interface IUserDAO {
    public function insertUser($user); // return boolean
    /*public function deleteUser($id); // return boolean*/
    /*public function updateUser($user); // return User*/
    public function findUser($user); // return boolean
    public function selectUser($user); // return User
    /*public function selectUsers($filtre);  // return array of Users*/
}
?>
