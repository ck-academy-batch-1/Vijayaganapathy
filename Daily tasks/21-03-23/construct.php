<?php
class sub {
    private $subject;

    public function __construct ($subject) {
        $this -> subject = $subject; 
    }

    public function Fsubject () {
        echo "My subject is ". $this -> subject[0]. "<br>";
        echo "My friend subject is ". $this -> subject[1]. "<br>";
    }
}

$my_study = new sub (["PHP", "JAVA"]);
$my_study->Fsubject (); 
?>