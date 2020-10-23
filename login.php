<?php
 // open koneksi ke database
$host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass =''; //pass login phpMyAdmin 
  $db ="distribusi_aset"; //nama database
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

 
 
 // ===
 
 $nama = $_POST['nama'];
 $password = $_POST['password'];
 
 // perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
  $mysqli = "SELECT * FROM data_login WHERE nama = '$nama'";
 $result = mysqli_query($conn, $mysqli);
 $data = mysqli_fetch_array($result);
 $nama_user = $data ['nama'];
 if($data){
 	session_start();
 	$_SESSION ['nama'] = $nama_user;
  // email yang dimasukan ada di db
  // check password
  if($password == $data['password']){
  Header("Location: Dashboard.php"); 
  }else{
   echo "<script>alert('Username atau Password anda salah!');window.location='index.html'</script>"; //salah password
  }
 }else{
   echo "<script>alert('Username atau Password anda salah!');history.go(-1);</script>"; //salah usrname
 }
?>