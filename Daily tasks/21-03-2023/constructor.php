<?php
class learn {
    private $subj;

    public function __construct ($subj) {
        $this -> subj = $subj; 
    }

    public function learnsubj () {
        echo "iam learning subj is ". $this -> subj[0]. "<br>";
        echo "My friend learning subj is ". $this -> subj[1]. "<br>";
    }
}

$my_sub = new learn (["PHP", "JAVA"]);
$my_sub->learnsubj (); 
?>