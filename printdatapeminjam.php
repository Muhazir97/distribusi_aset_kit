

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

<h2>Laporan Data Peminjam Aset</h2>
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
                                            <th>Nama Peminjam</th>
                                            
                                            <th>Nik</th>
                                            <th>Divisi</th>
                                             
                                              <th>Tgl Peminjaman</th>
                                              <th>Tgl Pengembalian</th>

                                              
                                              <th>Jenis Aset </th>
                                              <th>Serial Number</th>
                                              <th>Lokasi</th>
                                                       
  </tr>
   <tbody>

                                       <?php
                                          $no =1;

                                         $sql = $koneksi->query("select * from data_peminjam");
                                         while ($data = $sql->fetch_assoc()){

                                       ?>
  <tr>
                                       <td><?php echo $no ++; ?></td> 
                                       <td><?php echo $data['nama'];?></td> 
                                       <td><?php echo $data['nik'];?></td>
                                       <td><?php echo $data['divisi'];?></td>
                                        <td><?php echo $data['tgl_peminjaman'];?></td>
                                        <td><?php echo $data['tgl_pengembalian'];?></td>
                                         
                                        <td><?php echo $data['jenis_aset'];?></td>
                                        <td><?php echo $data['serial_number'];?></td>
                                        <td><?php echo $data['lokasi'];?></td>


     
          
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
