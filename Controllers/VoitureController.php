<?php

namespace App\Controllers;


/**
 * Define Voiture object
 */
class VoitureController
{
    public string $marque;
    public string $couleur;
    public int $puissance;

    /**
     * Constructor
     *
     * @param string $mar
     * @param string $coul
     * @param integer $puiss
     */
    public function __construct(string $mar, string $coul, int $puiss)
    {
        $this->marque = $mar;
        $this->couleur = $coul;
        $this->puissance = $puiss;
    }

    public function getInfos()
    {
        $result = "";
        $result .= "<div>";
        $result .= "<h2>".$this->getMarque()."</h2>";
        $result .= "<h2>".$this->getPuissance()."</h2>";
        $result .= "<h2>".$this->getCouleur()."</h2>";
        $result .= "</div>";

        return $result;
    }


    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param string $marque
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param string $couleur
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of puissance
     */ 
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance
     *
     * @param int $puissance
     * @return  self
     */ 
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }
}