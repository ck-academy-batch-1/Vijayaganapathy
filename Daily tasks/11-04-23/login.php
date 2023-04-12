<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "vijay" && $password == "vijay") {
            echo "1";
        } else {
            echo "0";
        }
    }
?>
