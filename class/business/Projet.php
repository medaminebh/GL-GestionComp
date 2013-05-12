<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Competence

 */
class Projet{

// Attributs
   //id:
  private $projet = array(
                    'id_projet' => null,
                    'nom_projet' => null,
                    'description_projet' => null,
                    'date_creation_projet' => null,
                    'id_service' => null
                    );

  // Constructeurs

    function __construct($projet = array()){
            if(isset($projet['id_projet'])) {
                $this->projet['id_projet'] = htmlspecialchars(intval($projet['id_projet']));
            }
            $this->projet['nom_projet'] = isset($projet['nom_projet'])? htmlspecialchars($projet['nom_projet']) : '' ;
            $this->projet['description_projet'] = isset($projet['description_projet'])? htmlspecialchars($projet['description_projet']) : '' ;
            $this->projet['date_creation_projet'] = isset($projet['date_creation_projet'])? htmlspecialchars($projet['date_creation_projet']) : '' ;
            $this->projet['id_service'] = isset($projet['id_service'])? htmlspecialchars($projet['id_service']) : '' ;
	}
	//Getters

        public function getId_Projet(){
            return $this->projet['id_projet'];
        }

        public function getNomProjet(){
            return $this->projet['nom_projet'];
        }

        public function getDescProjet(){
            return $this->projet['description_projet'];
        }

        public function getDateCreationProjet(){
            return $this->projet['date_creation_projet'];
        }

        public function getId_ServiceProjet(){
            return $this->projet['id_service'];
        }
    
	// Setters

        public function setId_Projet($id){
            $this->projet['id_projet'] = htmlspecialchars($id);
        }

        public function setNomProjet($nom_projet){
            $this->projet['nom_projet'] = htmlspecialchars($nom_projet);
        }

        public function setDescProjet($description_projet){
            $this->projet['description_projet'] = htmlspecialchars($description_projet);
        }

        public function setDateCreationProjet($date_creation_projet){
            $this->projet['date_creation_projet'] = htmlspecialchars($date_creation_projet);
        }

        public function setId_ServiceProjet($id_service){
            $this->projet['id_service'] = htmlspecialchars($id_service);
        }
}
?>
