<!DOCTYPE html>
<html>

<head>
    <title>PHP Programs</title>
</head>

<body>

    <?php

// Function to check if a number is prime or not
function isPrime($n)
{
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to generate Fibonacci series up to a given number of terms
function fibonacci($num)
{
    $a = 0;
    $b = 1;
    $series = array();
    array_push($series, $a, $b);
    for ($i = 2; $i < $num; $i++) {
        $c = $a + $b;
        array_push($series, $c);
        $a = $b;
        $b = $c;
    }
    return $series;
}

// Function to check if a given year is a leap year or not
function isLeapYear($year)
{
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

// Function to print a pattern
function printPattern($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br/>";
    }
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br/>";
    }
}

// Testing the functions

// Finding prime numbers
echo "Prime numbers: ";
for ($i = 1; $i <= 20; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "<br/>";

// Generating Fibonacci series
echo "Fibonacci series: ";
$series = fibonacci(10);
foreach ($series as $num) {
    echo $num . " ";
}
echo "<br/>";

// Checking if a year is a leap year
$year = 2024;
if (isLeapYear($year)) {
    echo $year . " is a leap year.<br/>";
} else {
    echo $year . " is not a leap year.<br/>";
}

// Printing a pattern
printPattern(5);
?>

</body>

</html>