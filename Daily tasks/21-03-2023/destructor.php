<?php
class subj {
    public $learning;

     function __destruct () {
        echo "My learning ". $this -> learning. " is deleted<br>";
    }
}

new subj ("vijay");
?>