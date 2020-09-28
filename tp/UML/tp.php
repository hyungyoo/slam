

<?php





class Eleve{

    private $nom;
    private $note;

    public function __construct($pnom, $pnote){
        $this->nom = $pnom;
        $this->note = $pnote;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getNote(){
        return $this->note;
    }
}



class TabEleves{

    private $tableauEleve;
    private $nb;

    public function __construct(){
        $this->tableauEleve = array();
    }

    public function ajouter($eleve){
        if(empty($this->tableauEleve)){
            $this->tableauEleve[] = $eleve;
        }
        elseif($this->tableauEleve[count($this->tableauEleve)-1]->getNote() < $eleve->getNote()){
          $this->tableauEleve[] = $eleve;
        }
        elseif(count($this->tableauEleve) < 35){
          for($i=0;$i<count($this->tableauEleve)+1;$i++){
            if($this->tableauEleve[$i]->getNote() > $eleve->getNote()){
              for($j=count($this->tableauEleve);$j>$i;$j--){
                  $this->tableauEleve[$j] = $this->tableauEleve[$j-1];
              }
              $this->tableauEleve[$i] = $eleve;
            }
            break;
          }
        }else{
            echo "c'est passé 35";
        }
    }

    public function Eleve_valeur($i){
      return $this->tableauEleve[$i];
    }

    public function supprimer($i){
        for($j=$i + 1;$j<count($this->tableauEleve);$j++){
            $this->tableauEleve[$j - 1] = $this->tableauEleve[$j];
        }
        array_pop($this->tableauEleve);
    }

    public function t(){
      return $this->tableauEleve;
    }

}  
$aa = new Eleve('aa', 20);
$bb = new Eleve('bb', 17);
$cc = new Eleve('cc', 28);
$dd = new Eleve('dd', 11);

$t = new TabEleves();

$t->ajouter($aa);
$t->ajouter($bb);
$t->ajouter($cc);
$t->ajouter($dd);

$liste = $t->t();

print_r($liste);

$t->supprimer(2);

$liste = $t->t();

print_r($liste);



/*
$a = array(3, 19, 1, 4, 33, 6, 17);


function algo($a){
  $count = 0;
  for($i=0;$i<count($a)-1;$i++){
    if($a[$i] > $a[$i + 1]){
      $temp = $a[$i];
      $a[$i] = $a[$i+1];
      $a[$i+1] = $temp;
      $count += 1;
    }
  }
  if($count == 0){
    return $a;
  }
  else{
    return algo($a);
  }
}

$liste1 = algo($a);

print_r($liste1);

*/

?>