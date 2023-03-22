<?php
class sub {
    private $sub1;
    
    private $sub2;

    public function __construct ($m, $f) {
        $this->sub1 = $m;
        $this->sub2 = $f;
    }

    public function printsubName () {
        echo "iam learning is " .$this->sub1."<br>";
        echo "my frient learn is ".$this->sub2;

    }
}

$my_sub = new sub("PHP", "JAVA");
$my_sub->printsubName(); 
?>