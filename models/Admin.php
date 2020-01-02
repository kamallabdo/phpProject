<?php 


class Admin{

    private $_user;
    private $_pass;

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
    /**
     * Get the value of _user
     */ 
    public function user()
    {
        return $this->_user;
    }

    /**
     * Get the value of _pass
     */ 
    public function pass()
    {
        return $this->_pass;
    }
    public function setPass($_pass)
    {
        $this->_pass = $_pass;

        return $this;
    }


    public function setUser($_user)
    {
        $this->_user = $_user;
        return $this;
    }
}
    

