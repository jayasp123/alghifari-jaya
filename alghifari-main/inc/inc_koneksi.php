<?php
$host = "sql107.infinityfree.com";
$user = "if0_36158574
";
$pass = "l928rGnDgTX";
$db = "if0_36158574_gallery
";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Gagal terkoneksi");
}
