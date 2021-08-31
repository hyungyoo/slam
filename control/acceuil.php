<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/db.cat.inc.php";
include_once "$racine/modele/db.inc.php";


$resultat=1;
echo $resultat;
/*




$countcat = Cat:: getCount('cat');

for($i=0;$i<=$countcat;$i++){
    $resultat = Cat::read("cat",$i);
}

$titre="acceuil";
include "$racine/vue/acceuil.php";

*/
?>
