<?php

function Resultat ($parcours, $joueurs){
    global $joueurs;
    $total = 0;
    for ($i=0; $i<=2; $i++){
        $total = $total + $parcours[$i];
    }
    for ($i=0; $i<=2; $i++){
        $totaljoueur = 0;
        for ($j=2; $j<=4; $j++){
            $totaljoueur = $totaljoueur + $joueurs[$i][$j];
        }
        $joueurs[$i][5] = $totaljoueur;
        $joueurs[$i][6] = $totaljoueur - $total;
    }
}

function Classement ($joueurs){
    global $joueurs;
    for ($i=0; $i<=2; $i++){
        for ($j=0; $j<=(1-$i); $j++){
            if ($joueurs[$j][6]>$joueurs[$j+1][6]){
                for ($k=0; $k<=6; $k++){
                    $temp = $joueurs[$j][$k];
                    $joueurs[$j][$k] = $joueurs[$j+1][$k];
                    $joueurs[$j+1][$k] = $temp;
                }
            }
        }
    }
    for ($i=0; $i<=2; $i++){
        echo ($i+1) ." : ". $joueurs[$i][0] ." ". $joueurs[$i][1];
		echo " Résultat : ". $joueurs[$i][6] ."\n";
    }
}

function Rang ($joueurs, $nom, $prenom){
    $i = 0;
    while($joueurs[$i][0]!=$nom && $joueurs[$i][1]!=$prenom){
            $i = $i+1;
    }
    return ($i+1);
}

function Joueur ($rang, $joueurs){
    return $joueurs[($rang-1)][0];
}

?>