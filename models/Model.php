<?php
    abstract class Model {

        private static $_bdd;

        //connecion a la base de donne

        private static function setBdd(){

            self::$_bdd = new PDO("mysql:host=localhost;dbname=pfe;charset=utf8",'root','');

            //gere les erreur
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);



        }
          //creation de la methode de la recupere de la liste des element

        protected function getBdd(){
              if(self::$_bdd ==null){
                  self::setBdd();
                  return self::$_bdd;
              }
        }
        protected function getAll($table,$obj){
              $this->getBdd();
              $var =[];
              $req = self::$_bdd->prepare("SELECT * FROM ".$table);
              $req ->execute();
              //on creer la variable date qui va contenir les donner
              while($data=$req->fetch(PDO::FETCH_ASSOC)){

                  $var[] = new $obj($data);
              }
              return $var;
              $req->CloseCursor();
          }
        protected function getOne($table,$obj,$username){
            $this->getBdd();
            $var =[];
            $req = self::$_bdd->prepare("SELECT * FROM ".$table." WHERE username = ? ");
            $req ->execute(array($username  ));
            //on creer la variable date qui va contenir les donner
            while($data=$req->fetch(PDO::FETCH_ASSOC)){

                $var[] = new $obj($data);
            }
            return $var;
            $req->CloseCursor();
        }
        protected function getOneFiliere($table,$obj,$filiere){
            $this->getBdd();
            $var =[];
            $req = self::$_bdd->prepare("SELECT * FROM ".$table." WHERE filiere = ? ");
            $req ->execute(array($filiere));
            //on creer la variable date qui va contenir les donner
            while($data=$req->fetch(PDO::FETCH_ASSOC)){

                $var[] = new $obj($data);
            }
            return $var;
            $req->CloseCursor();
        }

        //verifire la validation 
        protected function LoginValidateUser($table,$obj,$username,$password){
            $this->getBdd();
            $var =[];
            $req = self::$_bdd->prepare("SELECT username,password FROM ".$table." WHERE username = ? AND password = ? ");
            $req ->execute(array($username,$password));
            //on creer la variable date qui va contenir les donner
            while($data=$req->fetch(PDO::FETCH_ASSOC)){
                $var[] = new $obj($data);
            }
            return $var;
            $req->CloseCursor();
            
        }
          //insere un etudiant
          protected function InsertEtudiant($table_pfe,$username , $password , $nom1 , $nom2 , $nom3 , $prenom1 , $prenom2 ,$prenom3,$email1,$email2,$email3,$GSM1,$GSM2,$GSM3,$filiere,$date,$groupe){
            $this->getBdd();
            $var =[];
            $req = self::$_bdd->prepare("INSERT INTO ".$table_pfe."( username , password ,groupe , nom1, nom2 , nom3  , prenom1 , prenom2 , prenom3 ,  email1 , email2 , email3  , GSM1 , GSM2 , GSM3 , filiere , date )
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
            $req ->execute(array($username , $password ,$groupe, $nom1 , $nom2 , $nom3 , $prenom1 , $prenom2 ,$prenom3,$email1,$email2,$email3,$GSM1,$GSM2,$GSM3,$filiere,$date));
            //on creer la variable date qui va contenir les donner
    
            $req->CloseCursor();
        }
        //Admin
        protected function LoginValidateAdmin($table,$obj,$username,$password){
            $this->getBdd();
            $var =[];
            $req = self::$_bdd->prepare("SELECT user,pass FROM ".$table." WHERE user = ? AND pass = ? ");
            $req ->execute(array($username,$password));
            //on creer la variable date qui va contenir les donner
            while($data=$req->fetch(PDO::FETCH_ASSOC)){
                $var[] = new $obj($data);
            }
            return $var;
            $req->CloseCursor();
        }
        //recuperer par email 
        protected function getOneEmail($table,$obj,$email){
            $this->getBdd();
            $var =[];
            $req = self::$_bdd->prepare("SELECT * FROM ".$table." WHERE email1 = ? or email2 = ? or email3 = ? ");
            $req ->execute(array($email,$email,$email));
            //on creer la variable date qui va contenir les donner
            while($data=$req->fetch(PDO::FETCH_ASSOC)){

                $var[] = new $obj($data);
            }
            return $var;
            $req->CloseCursor();
        }
      //get All encadranntt

      protected function getAllEncadrant($table,$obj){
        $this->getBdd();
        $var =[];
        $req = self::$_bdd->prepare("SELECT * FROM ".$table);
        $req ->execute();
        //on creer la variable date qui va contenir les donner
        while($data=$req->fetch(PDO::FETCH_ASSOC)){

            $var[] = new $obj($data);
        }
        return $var;
        $req->CloseCursor();
    }


    }

?>
