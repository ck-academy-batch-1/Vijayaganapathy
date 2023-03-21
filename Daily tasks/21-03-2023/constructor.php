<?php
class FNames {
    private $name;

    public function __construct ($name) {
        $this -> name = $name; 
    }

    public function FamilyName () {
        echo "My name is ". $this -> name[0]. "<br>";
        echo "My friend name is ". $this -> name[1]. "<br>";
    }
}

$my_family = new FNames (["vijay", "Ajay"]);
$my_family->FamilyName (); 
?>