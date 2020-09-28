zenre

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
		$this->enMission = new CollectionDePompier();
		$this->enTravail = new CollectionDePompier();
		$this->enDisponible = new CollectionDePompier();		//채울필요는없다 
	}

	public function Missionner($unPompier)
	{
		$status = $unPompier->GetStatus($this);
		if ($status != "m")
		{
			$unPompier->Missioner($this);				//이건 periode의 missioner를 부르는거기떄문에 필요없다
			if ($status = "t")
				$this->auTravail->Enlever($unePompier);
			else
				$this->enDisponible->Enlever($unePompier);
			$this->enMission->Ajouter($unePompier);
		}
	}

	public function Missioner($unPompier)
	{
		if ($this->auTravail->Contient($unPompier))
			$this->auTravail->Enlever($unPompier);
		else
			$this->enDisponible->Enlever($unPompier);
		$this->enMission->Ajouter($unPompier);
	}

	public function Missioner($unPompier)
	{
		if ($this->GetStatus($unPompier) = 't')
			$this->auTravail->Enlever($unePompier);
		else
			$this->enDisponible->Enlever($unePompier);
		$this->enMisssion($unePompier);
	}

	//reemarque; on pourra trouver un test verifiant que les pompier n'est pas deja en mission

	public function SelectEquipe($nbPompier)
	{
		$lesPompiers = new CollectionDePompier();
		foreach ($this->enDiponible as $uneDisponible)
		{
			if ($nbPompier == $lesPompiers->Cardianl())
				return ($lesPompiers);
			$lesPompiers->Ajouter($uneDisponible);
		}
		foreach ($this->enMission as $uneMission)
		{
			if ($nbPompier == $lesPompiers->Cardianl())
				return ($lesPompiers);
			$lesPompiers->Ajouter($uneMission);
		}
		return ($lesPompiers);
	}

	public function SelectEquipe($nbPompier)
	{
		// 마지막에 pour i = 0 a nbPompiers - 1
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
		//잘못됨 왜냐하면 여기서는 위에서했던 SelectEquioe

		$nbPompierAppel = 0;
		$i = 0;

		while (($i < $this->lesPompiers->Cardianl()) && ($nbPompierAppel < $nbPompiers))
		{
			$unePompier = $this->lesPompier->Extraire($i);
			$PompierStatus = $unePompier->GetStatut($unePeriode); 
			if ($PompierStatus == "d" || $PompierStatus == "m")
			{
				if ($Pompierstatus == "d")
					$unePeriode->Missionner($unePompier);
				$this->Appeler($unePompier->GetNumeroBip());
				$nbPompierAppel++;
			}
			$i++;
		}
		return ($nbPompierAppel);
	}
}


?>