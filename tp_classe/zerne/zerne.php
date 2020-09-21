<?php

class Pompier
{
	private $nom;
	private $prenom;
	private $numeroBip;

	public function __construct()
	{
	}

	public function GetNumeroBip()
	{
		return ($this->numeroBip);
	}

	public function GetStatus($unePeriode)
	{
		return ($unePeriode->GetStatut($this));
	}

}

class Periode
{
	private $laDate;
	private $laTranche;
	private $enMission;
	private $auTravail;
	private $disponible;

	public function __construct($uneDate, $uneTranche)
	{
		$this->laDate = $uneDate;
		$this->laTranche = $uneTranche;
		//상태는 어떻게하지	
	}

	public function Missionner($unPompier)
	{
		$unPompier->Missioner($this);
	}

	publuc function SelectEquipe($nbPompier)
	{
		$lesPompiers = array();
		foreach ($this->diponible as $uneDisponible)
		{
			if ($nbPompier == $lesPompiers->Cardianl())
				return ($lesPompiers);
			else
				$lesPompiers->Ajouter($uneDisponible);
		}
		foreach ($this->enMission as $uneMission)
		{
			if ($nbPompier == $lesPompiers->Cardianl())
				return ($lesPompiers);
			else
				$lesPompiers->Ajouter($uneMission);
		}
		return ($lesPompiers);
	}	
}

class Caserne
{
	private $lesPompiers;

	private function Appeler($numeroBip)
	{
	}

	public function AppelEquipe($unePeriode, $nbPompiers)
	{
		$nbPompierAppel = 0;
		$i = 0;

		while ($nbPompierAppel < $nbPompiers)
		{
			$unePompier = $this->lesPompier[$i];
			$PompierStatus = $unePompier->GetStatut($unePeriode); 
			if ($PompierStatus == "d" || $PompierStatus == "m")
			{
				$unePeriode->Missionner($unePompier);
				$unePompier->Missionner($unePeriode);
				$this->Appeler($unePompier->GetNumeroBip());
				$nbPompierAppel++;
			}
			$i++;
		}
		return ($nbPompierAppel);
	}
}


?>
