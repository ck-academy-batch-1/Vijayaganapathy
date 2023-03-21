<?php
class Family {
    public $name;

     function __construct ($name) {
        $this -> name = $name;
        echo "My name ". $this -> name. " is created<br>";
    }

     function __destruct () {
        echo "My name ". $this -> name. " is deleted<br>";
    }
}

new Family ("vijay");
?>