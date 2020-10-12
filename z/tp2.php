
<?php



function saisirEleve($unEleve)
{
	echo "saisir nom";
	$nom = trim(fgets(STDIN));
	echo "saisir note";
	$note = trim(fgets(STDIN));
	$unEleve->__construct($nom, $note);
}

class Eleve
{
	private $nom;
	private $note;

	public function __construct($pnom, $pnote)
	{
		$this->nom = $pnom;
		$this->note = $pnote;
	}

	public function getNom()
	{
		return ($this->nom);
	}

	public function getNote()
	{
		return ($this->note);
	}
}

function resultat($TabEleve)
{
	$nbEleve = $this->getNb();
	if ($nbEleve > 0)
	{
		echo "le plus pire";
		echo $this->valeur(1)->getNom();
		echo $this->valeur(1)->getNote();
		echo "le plus bon";
		echo $this->valeur($this->getNb())->getNom();
		echo $this->valeur($this->getNb())->getNote();
		$sum = 0;
		for ($i = 1; $i <= $this->getNb(); $i++)
			$sum += $this->valeur($i)->getNote();
		echo $sum / $nbEleve;
	}
	else
		echo "pas de Eleve";
}


class TabEleves
{
	private $tableEleve;
	private $nb;

	public function __construct()
	{
	}

	public function getNb()
	{
		return $this->nb;
	}

	public function ajouter($ele)
	{
		$note = $ele->getNote();
		if ($nb < 35)
		{
			for ($i = 1; $i <= $this->getNb(); $i++)
			{
				if ($this->valeur($i)->getNote() > $note)
					break;
			}
			$placeEleve = $i;
			for ($j = $nb; $j > $i; $j--)
			{
				$this->valeur($j + 1) = $this->valeur($j);
			}
			$this->valeur($i) = $ele;
		}
		else
			echo "passer 35";
	}

	public function valeur($i)
	{
		return ($tableEleve($i));
	}

	publuc function supprimer($i)
	{
		if ($i > 0 && $i < 35)
		{
			for($j = $i + 1; $j <= $nb; $j++)
			{
				$this->valeur($j - 1) = $this->valeur($j);
			}
		}
		else
			echo "pas de choix";

		$this->nb -= 1;
	}
}


