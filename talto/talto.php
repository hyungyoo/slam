



<?php

class TReservoir
{

	private $carburant;
	private $capacite;
	private $volumeRestant;

	public function __construct($carburant, $capacite, $voluneRestant)
	{
		$this->carburant = $carburant;
		$this->capacite = $capacite;
		$this->volumeRestant = $volumRestant;
	}

	public function getCarbrant()
	{
		return ($this->carburant);
	}

	public function changeVolume($v)
	{
		$this->volumRestant += $v;
	}

	public function getVolumBesoin()
	{
		$limite = $this->capacite * (20 / 100);
		if ($limite >= $this->volumRestant)
			return ($this->capacite - $this->volumRestant);
		else
			return (0);
	}

	public function getVolumRestant()
	{
		return ($this->volumRestant);
	}

}


class TStation
{
	private $nom;
	private $tbReservoir;
	private $nbReservoir;


	public function __construct($nom, $tbReservoir)
	{
		$this->nom = $nom;
		for($i = 0; $i < 4; $i++)
		{
			if ($tbReservoir[$i] == NULL)
				break ;
		}
		$this->nbReservoir = $i;
	}

	public function getBesoin($carburant)
	{
		for($j = 0; $j < $nbReservoir; $j++)
			if ($carburant == $this->tbReservoir[$j].getCarburant())
				return ($this->tbReservoir[$j].getVolumBesoin());
		return (0);
	}

	public function getBesoin($carburant)
	{
		$i = 0;

		while ($i < $nbReservoir && !($this->tbReservoir[$i].getCarburant == $carburant))
			$i++;
		if ($carburant == tbReservoir[$i].getCarburant())
			return (tbReservoir[$i].getVolumBesoin());
		else
			return (0);
	}

	public function getNom()
	{
		return ($this->nom);
	}

}

class TTatto
{
	private $mesReservoirs;
	private $mesStations;

	public function __construct($mesReservoirs, $mesStations)
	{
		$this->mesReservoirs = $mesReservoirs;
		$this->mesStations = $mesStations;
	}

	public function getNbStations()
	{
		return (count($this->mesStations));
	}

	public function getStation($i)
	{
		return (mesStation[$i]);
	}

	public function livrer($carburant, $vol)
	{
		for($i = 0;$i < count(mesReservoirs);$i++)
			if ($this->mesReservoirs[$i].carburant == $carburant)
			{
				$this->mesReservoirs[$i].changeVolume($vol);
				break ;
			}
	}

	public function livrer($carburant, $vol)
	{
		$i = 0;

		while ($i < count(mesReservoirs) && !($this->mesReservoirs[$i].carburant == $carburant))
			$i++;
		if ($this->mesReservoirs[$i].carburant == $carburant)
			$this->mesReservoirs[$i].changeVolume($vol);
	}

	public function reste($carburant)
	{
		for($i = 0;$i < count(mesReservoirs);$i++)
			if ($this->mesReservoirs[$i]->carburant == $carburant)
				return ($this->mesReservoirs[$i]->getVolumRestant());
	}
}

?>
