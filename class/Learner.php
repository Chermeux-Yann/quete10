<?php

class Learner{

    private int $_id;
    private string $_poisson;
    private int $_age;
    private int $_description;
    private string $_couleur;
    private int $_size;

    //getters
    public function getId(){
        return $this->_id;
    }
    public function getPoisson(){
        return $this->_poisson;
    }
    public function getAge(){
        return $this->_age;
    }
    public function getDescription(){
        return $this->_description;
    }
    public function getCouleur(){
        return $this->_couleur;
    }
    public function getSize(){
        return $this->_size;
    }

    //setters
    public function setId(int $_id){
        return $this->_id =$_id;
    }
    public function setPoisson(string $_poisson){
        return $this->_poisson = $_poisson;
    }
    public function setAge(int $_age){
        return $this->_age = $_age;
    }
    public function setDescription(int $_description){
        return $this->_description =$_description;
    }
    public function setCouleur(string $_couleur){
        return $this->_couleur = $_couleur;
    }
    public function setSize(int $_size){
        return $this->_size = $_size;
    }

    //hydrate
    public function hydrate(array $tab){
        if(isset($tab['id']) && !empty($tab['id'])):
            $this->setId($tab['id']);
        endif;
        if(isset($tab['poisson']) && !empty($tab['poisson'])):
            $this->setPoisson($tab['poisson']);
        endif;
        if(isset($tab['age']) && !empty($tab['age'])):
            $this->setAge($tab['age']);
        endif;
        if(isset($tab['description']) && !empty($tab['description'])):
            $this->setDescription($tab['description']);
        endif;
        if(isset($tab['couleur']) && !empty($tab['couleur'])):
            $this->setCouleur($tab['couleur']);
        endif;
        if(isset($tab['size']) && !empty($tab['size'])):
            $this->setSize($tab['size']);
        endif;
    }
}