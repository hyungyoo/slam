<?php
include_once "db.inc.php";

class cat{
    private $num;
    private $nomchat;
    private $type;
    private $age;
    private $adressadopt;

}

function __construct($num,$nomchat,$type,$age,$adressadopt){
    $this->num=$num;
    $this->nomchat=$nomchat;
    $this->type=$type;
    $this->age=$age;
    $this->adressadopt=$adressadopt;
   }

public function get_numcat(){
    echo $this->num;
}
public function get_nomcat(){
    echo $this->nomchat;
}
public function get_typechat(){
    echo $this->nomchat;
}
public function get_agecat(){
    echo $this->type;
}
public function get_adresseadopt(){
    echo  $this->adressadopt;
}

?>


