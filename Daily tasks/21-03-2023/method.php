<?php
class learn {
    private $cour;
    
    private $subje;

    public function __construct ($m, $f) {
        $this->cour = $m;
        $this->subje = $f;
    }

    public function printlearnName () {
        echo "my sonjoined in " .$this->cour."<br>";
        echo "iam learning sub is ".$this->subje;

    } 
}

$my_learn = new learn("PHP", "JAVA");
$my_learn->printlearnName(); 
?>