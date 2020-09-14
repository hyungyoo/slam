

<?php

class Dossier
{
	private $nomPatient;
	private $prenomPatient;
	private $dateNaissancePatient;
	private $mesPrestations;
	private static $count;

	public function __construct($unNomPatient, $unPrenomPatient, $uneDateNaissancePatient)
	{
		$this->nomPatient = $nuNomPatient;
		$this->prenomPatient = $unPrenomPatient;
		$this->dateNaissancePatient = $uneDateNaissancePatient;
	}

	public function ajouterPrestation($unLibelle, $uneDate, $uneHeure, $unIntervenant)
	{
		self::count = count($mesPrestation);
		$this->mesPrestations[self::count] = new Prestation($unLibelle, $uneDate, $uneHeure, $unIntervenant);
		self::count += 1;
	}

	public function getNbPrestationExternes()
	{
		return (self::count);
	}

	public function getNbJoursSoins()
	{
		$i = 0;
		$k = 0;
		$tab = [];
		while ($i++ < count(mesPrestations))
		{
			if (!(in_array(mesPrestations[$i]->dateSoin, $tab)))
			{
				$tab[$k++] = mesPrestations[$i]->dateSoin;
			}
		}
		unset($tab);
		return ($k);
	}

}

class Prestation
{
	private $libelle;
	private $dateSoin;
	private $heureSoin;
	private $l_Intervenant;

	public function __construct($unLibelle, $uneDate, $uneHeure, $unIntervenant)
	{
		$this->libelle = $unLibelle;
		$this->dateSoin = $uneDate;
		$this->uneHeure = $heureSoin;
		$this->unIntervenant = $l_Intervenant;
	}

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



