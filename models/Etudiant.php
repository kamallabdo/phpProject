<?php

class Etudiant
{
    
    private $_id ;
    private $_username;
    private $_password;
    private $_filiere;
    private $_sujet;
    private $_groupe;
    private $_nom1;
    private $_prenom1;
    private $_nom2;
    private $_prenom2;
    private $_nom3;
    private $_prenom3;
    private $_email1 ; 
    private $_email2;
    private $_email3;
    private $_GSM1;
    private $_GSM2;
    private $_GSM3;
    private $_ville;
    private $_date;
    private $_dateconsult;
    private $dateLimIns;
    private $dateLimAvance;
    private $_encadrant;
    
    public function __construct(array $data)
    {
        $this->hydrate($data);
        
    }
    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            # code...
            //la varaible methode va prendre par ex 
            //setId ou setnomProd ou setPrixProd
            $method = "set".ucfirst($key); 
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }

    }
    public function setId($id){
        $id = (int) $id;
        if($id>0){
            $this->_id=$id;

        }
    }
    public function setUsername($username){
        if(is_string($username)){
            $this->_username =$username;
        }
    }
    public function setPassword($password){
        if(is_string($password)){
            $this->_password=$password;
        }

    }
    public function setSujet($sujet){
        if(is_string($sujet)){
            $this->_sujet = $sujet;
        }
    }
    public function setNom1($nom1){
        if(is_string($nom1)){
            $this->_nom1 =$nom1;
        }
    }
    public function setNom2($nom2){
        if(is_string($nom2)){
            $this->_nom2 = $nom2;
        }
    }
    public function setNom3($nom3){
        if(is_string($nom3)){
            $this->_nom3=$nom3;
        }
    }
    public function setPrenom1($prenom1){
        if(is_string($prenom1)){
            $this->_prenom1=$prenom1;
        }
    }
    public function setPrenom2($prenom2){
        if(is_string($prenom2)){
            $this->_prenom2=$prenom2;
        }
    }
    public function setPrenom3($prenom3){
        if(is_string($prenom3)){
            $this->_prenom3=$prenom3;
        }
    }
    public function setGSM1($gsm1){
        if(is_string($gsm1)){
            $this->_GSM1=$gsm1;
        }
    }
    public function setGSM2($gsm2){
        if(is_string($gsm2)){
            $this->_GSM2=$gsm2;
        }
    }
    public function setGSM3($gsm3){
        if(is_string($gsm3)){
            $this->_GSM1=$gsm3;
        }
    }
    

   
    public function username(){
        return $this->_username;
    } 
    
    public function password(){
        return $this->_password;
    }
    /**
     * Get the value of _groupe
     */ 
    public function groupe()
    {
        return $this->_groupe;
    }

    /**
     * Set the value of _groupe
     *
     * @return  self
     */ 
    public function setGroupe($_groupe)
    {
        $this->_groupe = $_groupe;

        return $this;
    }
    public function filiere(){
        return $this->_filiere;

    }
    public function setFiliere($filiere){
        $this->_filiere=$filiere;
    }
    public function nom1(){
        return $this->_nom1;
    }
    public function nom2(){
        return $this->_nom2;
    }
    public function nom3(){
        return $this->_nom3;
    }
    public function prenom1(){
        return $this->_prenom1;
    }
    public function prenom2(){
        return $this->_prenom2;
    }
    public function prenom3(){
        return $this->_prenom3;
    }
    public function sujet(){
        return $this->_sujet;
    }

    public function ville(){
        return $this->_ville;

    }
    public function setVille($ville){
        $this->_ville=$ville;
    }

    public function email1(){
        return $this->_email1;
    }
    public function email2(){
        return $this->_email2;
    }
    public function email3(){
        return $this->_email3;
    }
    public function setEmail2($email){
        $this->_email1=$email;
    }
    public function setEmail1($email){
        $this->_email2=$email;
    }
    public function setEmail3($email){
        $this->_email3=$email;
    }


    public function encadrant(){
        return $this->_encadrant;
    }
    public function setEncadrant($encadrant){
        $this->_encadrant=$encadrant;
    }
    public function date(){
        return $this->_date;
    }
    public function setDate($date){
        $this->_date=$date;
    }
    public function dateconsult(){
        return $this->_dateconsult;
    }
    public function setDateconsult($dateC){
        $this->_dateconsult=$dateC;
    }

    

    
}
