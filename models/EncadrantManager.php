<?php

class EncadrantManager extends Model {

        //verifire la validation de l Encadrant 
        public function AllEncadrant(){
            return $this->getAllEncadrant("Encadrant","Encadrant");
        }
}