<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$jenis_aset = $_POST['jenis_aset'];
$serial_number = $_POST['serial_number'];
$merk = $_POST['merk'];
$type = $_POST['type'];



// update data ke database
mysqli_query($koneksi,"update data_komputer set jenis_aset='$jenis_aset', serial_number='$serial_number', merk='$merk', type='$type' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables2.php");
 
?>