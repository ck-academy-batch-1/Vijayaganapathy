 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator using php</title>
 </head>
 <body>
<h1>string with class</h1>
<?php
class names {
   public function __construct()
   {
      echo "VIJAY , AJAY , SURIYA";
   }
}
$string = new names;


?>



<h1>ADD SUB MULTIPLY WITH CONSTRUCTOR</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label>ENTER NUMBER1</label>
  <input type="number" name="input1"><br>
  <label>ENTER NUMBER2</label>
  <input type="number" name="input2"><br>
  <button type="submit" name="add">ADD</button>
  <button type="submit" name="sub">SUB</button>
  <button type="submit" name="multiply">MULTIPLY</button>
</form>

<?php
class Calculator {
  private $number, $number2;

  public function __construct($num, $num2) {
    $this->number = $num;
    $this->number2 = $num2;
  }

  public function add() {
    return $this->number + $this->number2;
  }

  public function sub() {
    return $this->number - $this->number2;
  }

  public function multiply() {
    return $this->number * $this->number2;
  }
} 

if (isset($_POST["add"])) {
  $calc = new Calculator($_POST["input1"], $_POST["input2"]);
  echo "YOUR RESULT " . $calc->add() . "<br>";
}

if (isset($_POST["sub"])) {
  $calc = new Calculator($_POST["input1"], $_POST["input2"]);
  echo "YOUR RESULT " . $calc->sub() . "<br>";
}

if (isset($_POST["multiply"])) {
  $calc = new Calculator($_POST["input1"], $_POST["input2"]);
  echo "YOUR RESULT " . $calc->multiply() . "<br>";
}


/*
<h1>ADD SUB MULTIPLY WITH CONSTRUCTOR</h1>

<form action="POST">
<LABEl>  ENTER NUMBER1 </LABEl>
<input type="number" id="INPUT1"><br>
<label for=""> ENTER NUMBER2</label>
<input type="number" id="INPUT2"><br>
<button type="submit" onclick=add() >ADD</button>
<button type="submit" onclick=add() >SUB</button>
<button type="submit" onclick=add() >MULTIPLY</button>


<p></p>
</form>
   <?php

   $input1=$_POST["INPUT1"];
   $input2=$_POST["INPUT2"];

 class Calculator {
    private $number , $number2;

    public function __construct($num, $num1){
        $this->number = $num;
        $this->number1 = $num1;
    }

    public function add(){
        return $this->number + $this->number2;
      
    }

    public function sub(){
        return $this->number - $this->number2;
    }

    public function multiply (){
        return $this->number * $this->number2;
    }


}

$calc = new Calculator($input1,$input2);
echo "YOUR RESULT ".$calc->add()."<br>";

$calc = new Calculator (3,4);
echo "YOUR RESULT".$calc->sub()."<br>";

$calc = new Calculator (3,4);
echo " YOUR RESULT ".$calc->multiply()."<br>";

*/
?>

<h1>Factorial using loops</h1>

<form method="POST">
  <label for="fact">Enter a number for factorial:</label>
  <input type="number" id="fact" name="fact">
  <button type="submit">Submit</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $n = $_POST["fact"];

  $f = 1;

  for ($i = 1; $i <= $n; $i++) {
    $f = $f * $i;
  }
  echo "Factorial of $n is $f";
}

/*<h1>factorial using loops</h1>

<form action="POST">
   <LABEl>ENTER NUMBER FOR  FACTORIAL</LABEl>
   <input type="number" id="fact">
   <button type="submit" class="btn btn-primary" id="fact">Submit</button>
</form>
<?php


$n=$_POST["fact"];  

$f = 1; 

for ($i=1; $i <= $n; $i++) {  
  $f = $f * $i;  
} 
echo "Factorial of $n is $f";  

?>*/
?>



 </body>
 </html>