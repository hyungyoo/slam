<?php
include "getracine.php";
include "$racine/control/controlprincipal";

if (isset($_GET["action"])){
    $action = $_GET["action"];
}

else{

    $action ="defaut";
}

$fichier = controlprincipal($action);
include "$racine/control/$fichier";

?>