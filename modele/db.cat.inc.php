<?php
include "db.inc.php";

function read($num) {
    $cnx = connexionPDO();
    $req = "SELECT * from Cat where num = '$num' ";
    $stmt = $cnx->query($req);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
    
}
