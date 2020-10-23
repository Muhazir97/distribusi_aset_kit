<?php
$host = "localhost";
$user_name = "id10908229_okyganteng";
$password = "okyjoy";
$database = "id10908229_distribusi_aset";

$koneksi = mysql_connect($host, $user_name, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);

 //if ($pilihdatabase) echo"Berhasil";
 //else echo "Gagal Koneksi";
?>