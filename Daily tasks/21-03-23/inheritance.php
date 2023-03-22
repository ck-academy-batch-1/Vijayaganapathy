<?php
class namesub {
    public $sub12;

    public $sub23;

    public function __construct ($m, $f) {
        $this->sub12 = $m;
        $this->sub23 = $f;
    }
}

class sub extends namesub {
    public function FamilyName () {
        echo "iam in   $this->sub12 <br> my friend  in  $this->sub23 <br>";
    }
}

$cousub = new sub ("php", "Siva");
$cousub -> FamilyName (); 
?>