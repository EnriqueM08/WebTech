<!DOCTYPE html>
<html>
<body>
<?php
if(!isset($_COOKIE["cs4413"])) {
    echo "Cookie - cs4413 is not set!";
    setcookie("cs4413", "chocolate chip", time() + (120), "/");
} else {
    echo "Cookie - cs4413 is set!<br>";
    echo "Value is - " . $_COOKIE["cs4413"];
}
?>

</body>
</html>
