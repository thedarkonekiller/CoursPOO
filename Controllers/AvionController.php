<?php

namespace App\Controllers;


/**
 * Define Avion object
 */
class AvionController
{
    private string $marque;
    private string $couleur;
    private int $puissance;
    private string $lieuDepart;
    private string $destination;

    /**
     * Constructor
     *
     * @param string $mar
     * @param string $coul
     * @param integer $puiss
     */
    public function __construct(string $mar, string $coul, int $puiss, string $lieuAssemblage = "Paris")
    {
        $this->marque = $mar;
        $this->couleur = $coul;
        $this->puissance = $puiss;
        $this->lieuDepart = $lieuAssemblage;
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

    public function setAllAttributes(string $m, string $c, int $p) {
        $this->setMarque($m);
        $this->setCouleur($c);
        $this->setPuissance($p);
        
        return $this->getInfos();
    }

    public function setTrajet($arr) {
        if($this->destination === null) {
            $this->lieuDepart = $this->lieuDepart;
        } else {
            $this->lieuDepart = $this->destination;
        }
        $this->destination = $arr;
        $msg = "<p>L'avion est parti de ".$this->lieuDepart." et va à ".$this->destination."</p>";
        $this->lieuDepart = $arr;

        return $msg;
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

    /**
     * Get the value of lieuDepart
     */ 
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * Set the value of lieuDepart
     *
     * @return  self
     */ 
    public function setLieuDepart($lieuDepart)
    {
        $this->lieuDepart = $lieuDepart;

        return $this;
    }

    /**
     * Get the value of destination
     */ 
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set the value of destination
     *
     * @return  self
     */ 
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }
}