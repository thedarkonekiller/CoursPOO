<?php

namespace App\Controllers;

class ConducteurController
{
    private $lastname;
    private $firstname;
    private $age;

    /**
     * Conductor Constructor
     *
     * @param string $lname
     * @param string $fname
     * @param integer $age
     */
    public function __construct(string $lname, string $fname, int $age)
    {
        if ($age >= 20 && $age < 66) {
            $this->lastname = $lname;
            $this->firstname = $fname;
            $this->age = $age;
        } else {
            $error = "<p>".$fname." ".$lname." est trop jeune ou trop vieux</p>";
            echo $error;
        }
    }

    /**
     * Get all infos of a conductor
     * (Firstname, Lastname and Age)
     *
     * @return void
     */
    public function getConductor() {
        if($this->lastname != null) {
            $result = "";
            $result .= "<div>";
            $result .= "<h2>".$this->getFirstname()."</h2>";
            $result .= "<h2>".$this->getLastname()."</h2>";
            $result .= "<h2>".$this->getAge()."</h2>";
            $result .= "</div>";
    
            return $result;
        }
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}