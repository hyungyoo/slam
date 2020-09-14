<?php

$parcours = array();
$parcours[0] = 4;
$parcours[1] = 3;
$parcours[2] = 5;

$joueurs = array();
$joueurs[0] = array("Durand", "Eric", 4, 4, 3);
$joueurs[1] = array("Dupond", "Pierre", 3, 3, 4);
$joueurs[2] = array("Schenkel", "Stéphane", 1, 1, 1);

Resultat($parcours, $joueurs);
Classement($joueurs);

echo "Saisir le nom d'un joueur: ";
$nom = trim(fgets(STDIN));
$prenom = trim(fgets(STDIN));
$num = Rang($joueurs, $nom, $prenom);
echo "Il est classé n°: ". ($num);
echo "\n";

echo "Saisir le rang d'un joueur: ";
$rang = trim(fgets(STDIN));
echo "Il s'agit de: ". (Joueur($rang, $joueurs));

?>