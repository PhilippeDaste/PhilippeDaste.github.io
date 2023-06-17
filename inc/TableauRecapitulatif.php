<?php

class TableauRecapitulatif 
{

    private $brasserie ;
    private $prefecture;
    private $adresse;
    private $marque1;
    private $marque2;
    private $marque3;
    private $remarque;
    private $latitude;
    private $longitude;

    public function __construct($brasserie, $prefecture, $adresse, $marque1, $marque2 ="", $marque3="",$remarque="", $latitude="", $longitude="")
        {
            $this->brasserie = $brasserie;
            $this->prefecture = $prefecture;
            $this->adresse = $adresse;
            $this->marque1 = $marque1;
            $this->marque2 = $marque2;
            $this->marque3 = $marque3;
            $this->remarque = $remarque;
            $this->latitude = $latitude;
            $this->longitude = $longitude;
        }

    // brasserie
    public function getBrasserie()
    {
        return $this->brasserie;
    }
    public function setBrasserie($brasserie) 
    {
        if(is_string($brasserie)) {
            $this->brasserie = $brasserie;
        }
    }


    //prefecture
    public function getPrefecture()
    {
        return $this->prefecture;
    }
    public function setPrefecture($prefecture) 
    {
        if(is_string($prefecture)) {
            $this->prefecture = $prefecture;
        }
    }

    //adresse
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        if(is_string($adresse)) {
            $this->adresse = $adresse;
        }
        
    }
    
    //marque1
    public function getMarque1()
    {
        return $this->marque1;
    }
    public function setMarque1($marque1)
    {
        if(is_string($marque1)) {
            $this->marque1 = $marque1;
        }
    }
    
    //marque2
    public function getMarque2()
    {
        return $this->marque2;
    }
    public function setMarque2($marque2)
    {
        if(is_string($marque2)) {
            $this->marque2 = $marque2;
        }
    }
    
    //marque3
    public function getMarque3()
    {
        return $this->marque3;
    }
    public function setMarque3($marque3)
    {
        if(is_string($marque3)) {
            $this->marque3 = $marque3;
        }

    }
    
    //remarque
    public function getRemarque()
    {
        return $this->remarque;
    }
    public function setRearque($remarque)
    {
            if(is_string($remarque)){
                $this->remarque = $remarque;
            }
    }
    
    
    //latitude
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLatitude($latitude)
    {
        if (is_float($latitude)){
            $this->latitude = $latitude;
        }
    }
    
    //longitude
    public function getLongitude()
    {
        return $this->longitude;
    }
    public function setLongitude($longitude)
    {
        if (is_float($longitude)){
            $this->longitude = $longitude;
        }
    }   
    
}

?>
