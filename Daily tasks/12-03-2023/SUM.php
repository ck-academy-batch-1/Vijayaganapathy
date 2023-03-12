<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum of digit</title>
</head>
<body>
    <form method="POST">
        <label >Enter your score  :</label>
        <input type="text"  name="values" autocomplete="off" required> 
        <button type="submit">Submit</button>
    </form>
      
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = $_POST["values"];
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++){
            $sum += intval($num[$i]);
        }
        echo "Sum of digits in $num is: $sum";
    }
    ?>
</body>
</html>
