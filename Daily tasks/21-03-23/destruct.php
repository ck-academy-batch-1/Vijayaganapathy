<?php
class subj {
    public $name;

     function __destruct () {
        echo "my subject ". $this -> name. " is deleted<br>";
    }
}

new subj ("php");
?>