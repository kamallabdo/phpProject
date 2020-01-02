<?php

class AdminManager extends Model {

        //verifire la validation de l admin 
        public function LoginAdmin($username,$password){
            return $this->LoginValidateAdmin("Admin","Admin",$username,$password);
        }
}