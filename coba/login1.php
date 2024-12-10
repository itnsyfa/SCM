<!DOCTYPE html>
<html>
<body>
<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username=="Supplier1"&&$password=="mjp3108") {
    echo "<center><h1>selamat datang ".$username."</h1></center>";
    header("location: index.html");
}else{
    echo "<center><h1> Maaf Username atau Password yang anda masukkan salah..!</h1></center>";
}
?>
</body>
</html>