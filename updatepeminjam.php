<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$divisi = $_POST['divisi'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$jenis_aset = $_POST['jenis_aset'];
$serial_number = $_POST['serial_number'];
$lokasi = $_POST['lokasi'];


// update data ke database
mysqli_query($koneksi,"update data_peminjam set nama='$nama', nik='$nik', divisi='$divisi', tgl_peminjaman='$tgl_peminjaman', tgl_pengembalian='$tgl_pengembalian', jenis_aset='$jenis_aset', serial_number='$serial_number', lokasi='$lokasi' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:peminjam_asetK.php");
 
?>