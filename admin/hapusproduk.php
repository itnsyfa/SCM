<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "scm");

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");
echo "<script>alert('produk terhapus');</script>";
echo "<script>location='produk.php';</script>";
?>