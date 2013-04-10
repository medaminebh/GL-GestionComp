<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


interface ICompetenceDAO {
    public function insertCompetence($Competence); // return boolean
    public function deleteCompetence($id); // return boolean
    public function updateCompetence($Competence,$id); // return Competence
    public function findCompetence($Competence); // return boolean
    public function selectCompetence(); // return Competence
    public function selectCompetences($id);  // return array of Competences
}
?>
