<?php
class Person{
    private $name;
    private $nationalID;
    public function __construct($name, $ID){
        $this->name = strtolower($name);
        $this->nationalID = $ID;
    }
    

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($newName)
    {
        $this->name = strtoupper($newName);
    }

    public function getNationalID(){
        return $this->nationalID;
    }
}