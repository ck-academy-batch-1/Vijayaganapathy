
<?php
trait use_me {
    public $sub1;
    public $sub2;

    public function __construct ($m, $f) {
        $this->sub1 = $m;
        $this->sub2 = $f;
    }
}

trait use_me2 {
    function intro () {
        echo "<h1>MY FAMILY NAME</h1><br>";
    }
}

class  sub1 {
    use use_me, use_me2;

    public function sub1 () {
        echo "<h3>sub1  Name is   $this->sub1  <br>  sub2 Name is  $this->sub2 <br>";
    }
}

class  sub2 {
    use use_me;

    public function sub2 () {
        echo "sun1 name is $this->sub1 <br> sub2 name is  $this->sub2 </h3><br>";
    }
}

$COU23 = new sub1 ("PHP", "JAVA");
$COU23 -> intro ();
$COU23 -> sub1 (); 
$COUR13 = new sub2 ("PYTHON", "JS");
$COUR13 -> sub2 ();
?>