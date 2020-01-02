<?php 

class Encadrant{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_GSM;
    private $_salle;
    private $_jury;
    private $_observation;
    private $_specialite;


    public function __construct(array $data)
    {
        $this->hydrate($data);
        
    }
    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            # code...
            //la varaible methode va prendre par ex 
            //setId ou setnomProd ou setPrixProd
            $method = "set_".$key; 
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }

    }

    /**
     * Get the value of _id
     */ 
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function set_id($_id)
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    /**
     * Get the value of _GSM
     */ 
    public function get_GSM()
    {
        return $this->_GSM;
    }

    /**
     * Set the value of _GSM
     *
     * @return  self
     */ 
    public function set_GSM($_GSM)
    {
        $this->_GSM = $_GSM;

        return $this;
    }

    /**
     * Get the value of _salle
     */ 
    public function get_salle()
    {
        return $this->_salle;
    }

    /**
     * Set the value of _salle
     *
     * @return  self
     */ 
    public function set_salle($_salle)
    {
        $this->_salle = $_salle;

        return $this;
    }

    /**
     * Get the value of _jury
     */ 
    public function get_jury()
    {
        return $this->_jury;
    }

    /**
     * Set the value of _jury
     *
     * @return  self
     */ 
    public function set_jury($_jury)
    {
        $this->_jury = $_jury;

        return $this;
    }

    /**
     * Get the value of _observation
     */ 
    public function get_observation()
    {
        return $this->_observation;
    }

    /**
     * Set the value of _observation
     *
     * @return  self
     */ 
    public function set_observation($_observation)
    {
        $this->_observation = $_observation;

        return $this;
    }

    /**
     * Get the value of _specialite
     */ 
    public function get_specialite()
    {
        return $this->_specialite;
    }

    /**
     * Set the value of _specialite
     *
     * @return  self
     */ 
    public function set_specialite($_specialite)
    {
        $this->_specialite = $_specialite;

        return $this;
    }
}