<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>create session with roll number and name</h1>
<?php
// Set session variables
  
$_SESSION["Rollnumber"] = "11";
$_SESSION["Name"] = "John";
echo "Session variables are set.";
?>

</body>
</html>

