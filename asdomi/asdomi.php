<?php

class Dossier
{
	private $nomPatient;
	private $prenomPatient;
	private $dateNaissancePatient;
	private $mesPrestations;

	public function __construct($unNomPatient, $unPrenomPatient, $uneDateNaissancePatient)
	{
		$this->nomPatient = $nuNomPatient;
		$this->prenomPatient = $unPrenomPatient;
		$this->dateNaissancePatient = $uneDateNaissancePatient;
	}

	//public function ajouterPrestation($unLibelle, $uneDate, $uneHeure, $unIntervenant)
	//{
	//	$count = count($mesPrestation);
	//	$this->mesPrestations[$count] = new Prestation($unLibelle, $uneDate, $uneHeure, $unIntervenant);
	//}

	//corriger en utilisant classe Collection

	public function ajouterPrestation($unLibelle, $uneDate, $uneHeure, $unIntervenant)
	{
		$unePrestation = new Prestation($unLibelle, $uneDate, $uneHeure, $unIntervenant);
		$this->mesPrestations->ajouter($unePrestation);
	}

	//public function getNbPrestationExternes()
	//{
	//	return (Prestation::getCount() - count($mesPrestations));
	//}

	public function getNbPrestationExternes()
	{

	}

	public function getNbJoursSoins()
	{
		$i = 0;
		$ret = 0;
		$tab = array();
		while ($i++ < count(mesPrestations))
			if (!(in_array(mesPrestations[$i]->dateSoin, $tab)))
				$tab[$ret++] = mesPrestations[$i]->dateSoin;
		unset($tab);
		return ($ret);
	}

}

class Prestation
{
	private $libelle;
	private $dateSoin;
	private $heureSoin;
	private $l_Intervenant;
	//private static $count = 0;

	//public function __construct($unLibelle, $uneDate, $uneHeure, $unIntervenant)
	//{
	//	$this->libelle = $unLibelle;
	//	$this->dateSoin = $uneDate;
	//	$this->uneHeure = $heureSoin;
	//	$this->unIntervenant = $l_Intervenant;
	//	//self::count++;
	//}

	public function __construct($unLibelle, $uneDate, $uneHeure, $unIntervenant)
	{
		$this->libelle = $unLibelle;									//1 
		$this->dateSoin = $uneDate;									//1
		$this->uneHeure = $heureSoin;									//1
		$this->l_Intervenant = $unIntervenant;								//2
		$this->l_Intervenant->ajoutePrestation($this); //intervenant에도 prestation이 있기때문에	//3
		//celui qui est realisé par la prestation 이게아니면 for 이용해서 찾아야하고 복잡함
	}

	//public function getCount()
	//{
	//	return (self::count);
	//}

	public function compareTo($unePrestation)
	{
		$dateCourant = strtotime($this->dateSoin);
		$unePrestation = strtotime($unePrestation);
		if ($dateCourant == $unePrestation)
			return (0);
		else if ($dateCOurant > $unePrestation)
			return (-1);
		else
			return (1);
	}

	public function getDateSoin()
	{
		return ($this->dateSoin);
	}

	public function getHeureSoin()
	{
		return ($this->heureSoin);
	}

	public function getL_Intervenant()
	{
		return ($this->l_Interveant);
	}
}

?>

