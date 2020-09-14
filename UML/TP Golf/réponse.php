<?php


function Resultat ($parcours, $joueurs){
    $total = 0;
    foreach($parcours as $valeur){
      $total += $valeur;
    }
    foreach ($joueurs as $unjoueur){
        $totaljoueur = 0;
        foreach($unjoueur as $cle => $valeurs){
          if($cle != "nom" && $cle != "prénom" && $cle != "totaljoueur" && $cle != "prénom"){
            $totaljoueur += $valeurs;
          }
        }
        $unjoueur["totaljoueur"] = $totaljoueur;
        $unjoueur["résultat"] = $totaljoueur - $total;
    }
    return $joueurs;
}


function Classement ($joueurs){
    $compteur = 0;
    foreach ($joueurs as $unjoueur){
        $compteur += 1;
        for ($j=$compteur; $j<count($joueurs); $j++){
            if ($unjoueur["résultat"]>$joueurs[$j]["résultat"]){
              $temp = $unjoueur;
              $unjoueur = $joueurs[$j];
              $joueurs[$j] = $temp;
            }
        }
    }
    for ($i=0; $i<count($joueurs); $i++){
        echo ($i+1) ." : ". $joueurs[$i]["nom"] ." ". $joueurs[$i]["prénom"];
		echo " R�sultat : ". $joueurs[$i]["résultat"] ."\n";
    }
    return $joueurs;
}

function Classement2 ($joueurs){
    $count = 0;
    for ($i=0; $i<2; $i++){
      if ($joueurs[$i]["résultat"]>$joueurs[$i+1]["résultat"]){
        $count += 1;
        $temp = $joueurs[$i];
        $joueurs[$i] = $joueurs[$i+1];
        $joueurs[$i+1] = $temp;
      }
    }
    if($count != 0){
      return Classement2($joueurs);
    }
    for ($i=0; $i<=2; $i++){
        echo ($i+1) ." : ". $joueurs[$i]["nom"] ." ". $joueurs[$i][1];
		echo " résultat : ". $joueurs[$i]["résultat"] ."\n";
    }
    return $joueurs;
}

function Rang ($joueurs, $nom, $prenom){
    foreach($joueurs as $cle => $unjoueur){
      if($unjoueur["nom"]==$nom && $unjoueur["prénom"]==$prenom){
        return $cle + 1;
      } 
    }
    return 0;
}

function Joueur ($rang, $joueurs){
    return $joueurs[($rang-1)]["nom"];
}

?>