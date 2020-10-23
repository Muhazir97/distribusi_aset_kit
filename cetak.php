<title>PT. Krakatau Information Technology</title>
            <link rel ="stylesheet" type="text/css" href="1. LatihanMenu3.css">
      <link rel ="icon" type="image/png" href="KS.png">
<div class="container">
	<?php  $con = mysqli_connect("localhost","root","","distribusi_aset");?>

	<style>.header{
	width				:100%;
	height				:100px;
	}
   </style>
		<div class="header">
	<img src="logo.png" class="header">
</div>
<br>
<br>
<br>
	<h1>Laporan</h1>
	<hr>
	<h4>Jumlah Aset : <?php echo mysqli_num_rows(mysqli_query($con, "SELECT*FROM data_komputer"));?></h4><br><br>
	<table>
	<tr>
			<h4>Jumlah Peminjaman :</h4>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<th>1. Sedang Dipinjam</th>
			<td>:</td>
			<td><?php echo mysqli_num_rows(mysqli_query($con, "SELECT*FROM data_peminjam WHERE status = '0'"));?></td>
		</tr>
		<tr>
			<th>2. Sudah Dikembalikan</th>
			<td>:</td>
			<td><?php echo mysqli_num_rows(mysqli_query($con, "SELECT*FROM data_peminjam WHERE status = '1'"));?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>___________</td>
		</tr>
		<tr>
			<th>Total</th>
			<td>:</td>
			<td><?php echo mysqli_num_rows(mysqli_query($con, "SELECT*FROM data_peminjam"));?></td>
		</tr>
	</table>
</div>
<script>
    window.print();
  </script>