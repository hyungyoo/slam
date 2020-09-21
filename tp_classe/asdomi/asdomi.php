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

	public function getNbPrestationExternes() // boucle avec "mesPrestations" , et recuperer intervenants externes

	{
		$compteur = 0;

		foreach ($this->mesPrestations as $unePrestation)						//foreach ($nomDeTableau as $chaqueValeur)
			if ($unePrestation->getL_Intervenant()->getType() == "IntervenantExterne")
				$compteur++;
		return ($compteur);
	}

	public function getNbJoursSoins()
	{
		$ret = 0;
		$tab = array();
		foreach ($this->mesPresataion as $unePrestation)
			if (!(in_array($unsPrestation->getDateSoin(), $tab)))
				$tab[$ret++] = $unePrestation->getDateSoin();
		unset($tab);
		return ($ret);
	}


	public function getNbJoursSoins()
	{
		$compteur = 0;
		if ($this->mesPrestations->cardianl() != 0)
		{
			$this->mesPrestations->trier();			//pas de function, donc pas de variable pour le prendre comme $p = etc	
			$compteur = 1;

			for ($i = 2; $i <= $this->mesPrestations->cardinal(); $i++)
			{
				if ($this->mesPrestations->obtenirObjet($i)->compareTo($this->mesPrestations->0btenirObjet($i - 1) != 0))
				{
					$compteur++;
				}
			}
		}
		return ($compteur);
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

	//public function compareTo($unePrestation)
	//{
	//	$dateCourant = strtotime($this->dateSoin);
	//	$unePrestation = strtotime($unePrestation);
	//	if ($dateCourant == $unePrestation)
	//		return (0);
	//	else if ($dateCOurant > $unePrestation)
	//		return (-1);
	//	else
	//		return (1);
	//}
	
	public function compareTo($unePrestation)
	{
		$unePrestation = $unePrestation->dateSoin;

		if ($this->dateSoin->estEgale($unePrestation))			//classe technique 의 접근법은 내부속성에 -> 기술클라스의 함수
			return (0);
		else
		{
			if ($this->dateSoin->estSupérieur($unePrestation))
				return (1);
			else 
				return (-1);
		}
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

