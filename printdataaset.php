

<html>
    <head>
        <title>PT. Krakatau Information Technology</title>
            <link rel ="stylesheet" type="text/css" href="1. LatihanMenu3.css">
      <link rel ="icon" type="image/png" href="KS.png">
    </head>
    <body>
    <div id="layout">
    <div class="header">
    <img src="logo.png" class="header">
</div>
     
<br>

<h2>Laporan Data Aset</h2>
  <hr>
<br>
<br>
<style type="text/css">
    body {
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
    }
    
    /* Table */
    .demo-table {
      border-collapse: collapse;
      font-size: 13px;
    }
    .demo-table th, 
    .demo-table td {
      border: 1px solid black;
      padding: 7px 17px;
    }
    .demo-table .title {
      caption-side: bottom;
      margin-top: 12px;
    }
    
    /* Table Header */
    .demo-table thead th {
      background-color: #blue;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }
    
    /* Table Body */
    .demo-table tbody td {
      color: #353535;
    }
    .demo-table tbody td:first-child,
    .demo-table tbody td:last-child,
    .demo-table tbody td:nth-child(4) {
      text-align: center;
    }
    .demo-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .demo-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
      transition: all .2s;
    }
    
    /* Table Footer */
    .demo-table tfoot th {
      background-color: #e5f5ff;
    }
    .demo-table tfoot th:first-child {
      text-align: left;
    }
    .demo-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
<?php
$koneksi=new mysqli ("localhost","root","","distribusi_aset");
?>
<body>
  <table class="demo-table"  >
    
  <tr bgcolor="#6495ED">
    <th>NO</th>
    <th>JENIS ASET</th>
    <th>SERIAL NUMBER</th>
    <th>MERK</th>
    <th>TYPE</th>
    <th>STATUS</th>
  </tr>
</thead>
<tbody>
      <?php
        $no =1;
        $sql = $koneksi->query("select * from data_komputer");
        while ($data = $sql->fetch_assoc()){
      ?>
   <tr>
      <td><?php echo $no ++; ?></td> 
      <td><?php echo $data['jenis_aset'];?></td>
      <td><?php echo $data['serial_number'];?></td>
      <td><?php echo $data['merk'];?></td>
      <td><?php echo $data['type'];?></td>
      <td><?php
           $qq = mysqli_query($koneksi, "SELECT*FROM data_peminjam WHERE serial_number='[serial_number]'");
           $ddqq = mysqli_fetch_array($qq);
           $caripinjam = mysqli_num_rows($qq);
           if ($caripinjam > 0 && $ddqq['status'] !== '1') {
           echo "<button class='btn btn-danger'>Dipinjam</button>";
           }else{
                  echo "<button class='btn btn-success'>Tersedia</button>";
                }
            ?>
       </td>
       </tr>
  </tr>
  <?php } ?>
</table>
</form>
<br>
 
 
  <br>
  <br>
</div>
        
    </body>
</html>
<script>
    window.print();
  </script>
