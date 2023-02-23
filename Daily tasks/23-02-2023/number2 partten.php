<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number task 2</title>
</head>
<body>
<h1>NUMBER TASK2 </h1>
<?php

$n=5;
$num=1;

for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
    echo $num." ";
    $num++;
}
echo "<br>";
}
?>
</body>
</html>