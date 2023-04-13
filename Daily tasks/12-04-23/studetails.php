<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$sql = "SELECT * FROM stude";
$result = $conn->query($sql);

echo "<table>";
echo "<tr>";
echo "<th>Student ID</th>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>Grade</th>";
echo "</tr>";
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>" . $row['student_id'] . "</td>";
    echo "<td>" . $row['student_name'] . "</td>";
    echo "<td>" . $row['student_age'] . "</td>";
    echo "<td>" . $row['student_grade'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
