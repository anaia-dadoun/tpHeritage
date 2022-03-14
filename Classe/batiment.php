<?php
 class  Batiment  implements BatiStructure
{
    public String $nom;
    public int $superficie;
    public String $type;
    public int $nbEtages;

public function Batiment(String $unNom, int $uneSuperficie, String $untype, int $unNbEtage )
{
    $nom= $unNom;
    $superficie= $uneSuperficie;
    $type =$untype;
    $nbEtages= $unNbEtage ;


    
}

	public function  getNom() {
		return $nom;
	}

    public function  getSuperficie() {
		return $superficie;
	}

    public function  getType() {
		return $Type;
	}
    
    public function  getUnNbEtage() {
		return $unNbEtage;
	}

}

?>