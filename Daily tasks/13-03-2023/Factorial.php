<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    
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