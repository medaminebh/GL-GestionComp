<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Competence

 */
class Competence{

// Attributs
   //id:
  private $Competence = array(
                    'id_competence' => null,
                    'nom_competence' => null,
                    'description_competence' => null,
                    'niveau' => null,
                    );

  // Constructeurs

    function __construct($nom, $desc, $niv){
          
            $this->Competence['nom_competence'] = isset($nom)? htmlspecialchars($nom) : '' ;
			$this->Competence['description_competence'] = isset($desc)? htmlspecialchars($desc) : '' ;
            $this->Competence['niveau'] = isset($niv)? htmlspecialchars($niv) : '' ;          

	}

	public function storeFormValues( $params ) {
//store the parametersclass/
$this->__construct( $params ); 
}
	//Getters

        public function getId_Competence(){
            return $this->Competence['id_Competence'];
        }

        public function getNomCompetence(){
            return $this->Competence['nom_competence'];
        }

        public function getDescCompetence(){
            return $this->Competence['description_competence'];
        }

        public function getNiveau(){
            return $this->Competence['niveau'];
        }
    
	// Setters

		public function setId_Competence($id){
            $this->Competence['id_Competence'] = htmlspecialchars($id);
        }

        public function setNomCompetence($nom_competence){
            $this->Competence['nom_competence'] = htmlspecialchars($nom_competence);
        }

        public function setDescCompetence($description_competence){
            $this->Competence['description_competence'] = htmlspecialchars($description_competence);
        }

        public function setNiveau($niveau){
            $this->Competence['niveau'] = htmlspecialchars($niveau);
        }   
}
?>
