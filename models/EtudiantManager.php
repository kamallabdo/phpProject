<?php

class EtudiantManager extends Model {

        public function getEtudiant(){
            return $this->getAll("Etudiant","Etudiant");
        }
        //return etudiant par Filier 
        public function getByFiliere($filiere){
            return $this->getOneFiliere("Etudiant","Etudiant",$filiere);
        }
        //retouner un etudiant par son nom
        public function getOneUser($username){
            return $this->getOneFiliere("Etudiant","Etudiant",$username);
        }
        //verifier la validiation des donnes
        public function getLogin($username,$password){
            return $this->LoginValidateUser("Etudiant","Etudiant",$username,$password);
        }
        //inscrptions des nouveau etudiant 
        public function InsertEtud($username,$password, $nom1 , $nom2 , $nom3 , $prenom1 , $prenom2 ,$prenom3,$email1,$email2,$email3,$GSM1,$GSM2,$GSM3,$filiere,$date,$groupe){
            return $this->InsertEtudiant("Etudiant",$username,$password, $nom1 , $nom2 , $nom3 , $prenom1 , $prenom2 ,$prenom3,$email1,$email2,$email3,$GSM1,$GSM2,$GSM3,$filiere,$date,$groupe);
        }
        //return etudiant par email 
        public function getByEmail($email){
            return $this->getOneEmail("Etudiant","Etudiant",$email);
        }
    
}