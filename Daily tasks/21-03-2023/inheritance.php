<?php
class newsubj {
    public $SUB1;

    public $SUB2;

    public function __construct ($S1, $S2) {
        $this->SUB1 = $S1;
        $this->SUB2 = $S2;
    }
} 

class learn extends newsubj {
    public function subjectname () {
        echo "my SUB1 name is  $this->SUB1 <br> my SUB2 name is  $this->SUB2 <br>";
    }
}

$my_learn = new learn ("php", "java");
$my_learn -> subjectname (); 
?>