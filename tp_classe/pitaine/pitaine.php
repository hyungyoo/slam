

<?php

class Bateau
{
	private $idBat;
	private $nomBat;
	private $longueBat;
	private $largeurBat;

	public function __construct($unid, $unNom, $uneLongueur, $uneLargeur)
	{
	}

	public function versChain()
	{
	}
}

class BateauVoyageur extends Bateau
{
	private $Batvoy;
	private $imageBatvoy;
	private $lesEquipements;

	public function __construct($unid, $unNom, $uneLongueur, $uneLargeur, $uneVitesse, $uneImage, $uneCollEquip)
	{
		parent::__construct($unid, $unNom, $uneLongueur, $uneLargeur); //utilisation de la constructeur de Bateau -exercice 1-
		$This->Batvoy = $uneVitesse;
		$this->imageBatvoy = $uneImage;
		$this->lesEquipement = $uenCollEquip;
	}

	public function versChaine()						//모든건 문제속에 +와 $sautligne를 사용함
	{
		$detail = parent::versChaine() + $sautligne;;
		$datail = $datail + "vitesse" + $this->vitesseVoy() + "norud" + $sautligne;
		$detail = $datail + "Liste de equipements du bateau" + $sautligne;
		foreach ($this->lesEquipement as $uneEquipement)
			$detail += "-" + $uneEquipement->verChaine() + $sautligne;
		return ($detail);
	}
}
