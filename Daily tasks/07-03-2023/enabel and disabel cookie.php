<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
<h1>enabel and disabel cookie</h1>
<?php
if(count($_COOKIE) < 0) {
 echo "Cookies are enabled.";
} else {
 echo "Cookies are disabled.";
}
?>

</body>
</html>
