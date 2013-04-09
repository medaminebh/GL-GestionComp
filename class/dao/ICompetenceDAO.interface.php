<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


interface ICompetenceDAO {
    public function insertCompetence($Competence); // return boolean
    public function deleteCompetence($Competence); // return boolean
    public function updateCompetence($Competence); // return Competence
    public function findCompetence($Competence); // return boolean
    public function selectCompetence($Competence); // return Competence
    public function selectCompetences($Competences_filtre, $limit);  // return array of Competences
}
?>
