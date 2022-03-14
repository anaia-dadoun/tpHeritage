<?php

class  Immeuble extends Batiment 
{
   
    public bool $ascenceur;
    public int $nbAppartement;
    public bool $garage;

public function Immeuble  (Bool $unAscenceur, int $unNbAppartement, Bool $unGarage )
{
    $ascenceur=  $unAscenceur;
    $nbAppartement= $unNbAppartement;
    $garage = $unGarage;
    
}


public function  getAscenceur() {
    return $ascenceur;
}

public function  getunNbAppartement() {
    return $unNbAppartement;
}

public function  getGarage() {
    return $garage;
}
 
public function  setGarage() {
    return $garage;
}
 

}

?>