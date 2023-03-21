<?php
class famname {
    public $mother;

    public $father;

    public function __construct ($m, $f) {
        $this->mother = $m;
        $this->father = $f;
    }
}

class myname extends famname {
    public function FamilyName () {
        echo "my mather name is  $this->mother <br> my father name is  $this->father <br>";
    }
}

$my_myname = new myname ("anathi", "jothi");
$my_myname -> FamilyName (); 
?>