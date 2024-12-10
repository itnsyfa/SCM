<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "scm");

$ambil = $koneksi->query("SELECT * FROM customer WHERE id_customer='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM customer WHERE id_customer='$_GET[id]'");
echo "<script>alert('pelanggan terhapus');</script>";
echo "<script>location='pelanggan.php';</script>";
?>