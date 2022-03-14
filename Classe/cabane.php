<?php

class  Cabane extends Batiment 
{
    public String $nom;
    public int $superficie;
    public String $type;
    public int $nbEtages;
}

 function Cabane(String $unNom, int $uneSuperficie, String $untype, int $unnbEtage )
{
    $nom= $unNom;
    $superficie= $uneSuperficie;
    $type =$untype;
    $nbEtages= $unnbEtage ;
}


?>