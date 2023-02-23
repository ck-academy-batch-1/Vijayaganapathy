<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
</head>
<body> 

<h1> number pattern</h1>
<?php
function printPattern1($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br/>";
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br/>";
    }
}
printPattern1(10);
?>





</body>
</html>