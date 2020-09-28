

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
      $this->nb = 0;
    }

    public function getNb(){
      return $this->nb;
    }

    public function ajouter($eleve){
        if($this->nb == 35){
          echo "c'est passé 35";
        }elseif($this->nb == 0 || $this->tableauEleve [$this->nb-1]->getNote() < $eleve->getNote()){
            $this->tableauEleve[] = $eleve;
        }
        elseif($this->nb < 35){
          for($i=0;$i<$this->nb+1;$i++){
            if($this->tableauEleve[$i]->getNote() > $eleve->getNote()){
              for($j=$this->nb;$j>$i;$j--){
                  $this->tableauEleve[$j] = $this->tableauEleve[$j-1];
              }
              $this->tableauEleve[$i] = $eleve;
            }
            break;
          }
        }
        $this->nb += 1;
    }
    

    public function ajouter2($eleve){
      if($this->nb == 35){
        echo " c'est déjà passé 35";
      }elseif($this->nb == 0){
          $this->tableauEleve[] = $eleve;
      }else{
        $i = 0;
        while($i < $this->nb && $eleve->getNote() > $this->tableauEleve[$i]->getNote()){
          $i += 1;
        }
        for($j=$this->nb;$j>$i;$j--){
          $this->tableauEleve[$j] = $this->tableauEleve[$j - 1];
        }
        $this->tableauEleve[$i] = $eleve;
      }
      $this->nb = count($this->tableauEleve);
    }  
    
  
    public function ajouter3($eleve){
      /* 여기가문제임 안에있는 키값을 찾지못함 */
      if(!in_array($eleve->getNom(), $this->tableauEleve)){
        $this->tableauEleve[] = $eleve;
      }
      else{
         $count = 0;
         for($i=0;$i<count($this->tableauEleve)-1;$i++){
           if($this->tableauEleve[$i]->getNote() > $this->tableauEleve[$i + 1]->getNote()){
             $temp = $this->tableauEleve[$i];
             $this->tableauEleve[$i] = $this->tableauEleve[$i+1];
             $this->tableauEleve[$i+1] = $temp;
             $count += 1;
           }
       }
       if($count != 0){
         return $this->ajouter3($eleve);
       }
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

}  


function saisirEleve($nomObjet){
  $nom = trim(fgets(STDIN));
  $note = trim(fgets(STDIN));
  $nomObjet = new Eleve($nom, $note);
}


function résultats($tableauEleve){
  $meuilleur = $tableauEleve->nb - 1;
  $moins = 0;
  echo $tableauEleve[$meuilleur]->nom;
  echo $tableauEleve[$meuilleur]->note;
  echo $tableauEleve[$moins]->nom;
  echo $tableauEleve[$moins]->note;
  $notetotal = 0;
  for($i=0;$i<$tableauEleve->nb;$i++){
    $notetotal += $tableauEleve[$i]->getNote();
  }
  $avg = $notetotal / $tableauEleve->nb;
  echo $avg;
}






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

class Genre{

  private $libellé;
  private $lesLivre /* collection de livres */
  private $étagère;

  public function __construct($libelléGenre, $lesLivre, $uneEtagère){
    $this->genre = $libelléGenre;
    $this->lesLivre = $lesLivre;
    $this->étagère = $uneEtagère;
  }
  
  public function rangLivre($livre){

    for($j=0;$j<count($livre);$j++){
      for( $i=1, $s= $livre[$j]; $i <=26; $i++,$a++){
        
      }     
    }
      
  }
  

  public function placelivre(){

  }
}

class Livre{

  private $titre;
  private $genre;

  public function __construct($titreLivre, $unGenre){
    $this->titre = $titreLivre;
    $this->genre = $unGenre;
  }

  public function getTitre(){
    return $this->titre;
  }
}


class Bilbliothèque{

  public function __construct(){

  }

  public function getGenre(){
    
  }

  public function nouveauLivre(){

  }
}

class Etagère{
  private $numéro;

  public function __construct($numEtagère){
    $this->numéro = $numEtagère;
  }
}



class Collection{

  public function cardinal(){

  }

  public function existe(){

  }

  public function index(){

  }

  public function donnerObjet(){

  }

  public function ajouter(){

  }

  public function remplacerA(){

  }

  public function enlever(){

  }

  public function vider(){

  }

}

?>