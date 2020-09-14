<?php

require "LibGolf.php";

$parcours = array(
    "trou_1" => 4,
    "trou_2" => 3,
    "trou_3" => 5
);

$joueurs = array(
        0 => array("nom" => "Durand", "prénom" => "Eric", "trou n 1" => 4 , "trou n 2" => 4, "trou n 3" => 3, "totaljoueur" => 0, "résultat" => 0),
        1 => array("nom" => "Dupond", "prénom" => "Pierre", "trou n 1" => 3, "trou n 2" => 3, "trou n 3" => 4, "totaljoueur" => 0, "résultat" => 0),
        2 => array("nom" => "Schenkel", "prénom" => "Stéphane", "trou n 1" => 1, "trou n 2" => 1, "trou n 3" => 1, "totaljoueur" => 0, "résultat" => 0)
);

$joueurs = Resultat($parcours, $joueurs);
$joueurs = Classement($joueurs);

echo "Saisir le nom d'un joueur: ";
$nom = trim(fgets(STDIN));
echo "Saisir le prenom d'un joueur: ";
$prenom = trim(fgets(STDIN));
$num = Rang($joueurs, $nom, $prenom);
echo "Il est classé n°: ". ($num);
echo "\n";

echo "Saisir le rang d'un joueur: ";
$rang = trim(fgets(STDIN));
echo "Il s'agit de: ". (Joueur($rang, $joueurs));

?>