<?php
function controlprincipal($action){
    $lesaction=array();
    $lesaction["defaut"]= "acceuil.php";
    $lesaction["liste"] =  "listecat.php";
    $lesaction["details"] ="detailcat.php";

    if( array_key_exists($action,$lesaction)){
        return $lesaction[$action];
    }
    else{
        return $lesaction["defaut"];
    }
}
?>