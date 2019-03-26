 <?php
 session_start();
 require_once("koneksi.php");
 //menyertakan file satu kali eksekusi

$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>

<head>
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body style="background: url(boston.jpg);color:white">
</head>
<center>
<div>
    <h1 style="font-family: Arial, Helvetica, sans-serif;">Data Mahasiswa</h1>
    


<a href="login.php"><input type="submit" value="Masuk" class="btn btn-success btn-lg" style="width: 100px;height: 35px"></a>



<br><br><br><br>
    <table class="table">
  <tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Kota</th>
  </tr>

  <?php

if ($result->num_rows > 0) {
  //pengulangan dari baris ke 0
 
    while($row = $result->fetch_assoc()) {
      //menampilkan nama baris yang diseleksi

   
?>
  <tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nim'] ?></td>
    <td><?= $row['kota'] ?></td>
  </tr>
<?php
    }
} 
$conn->close();

?>
</table>
</div>
<div id="kanan">
  <br><br> 
   <form id="form-container" class="form-container">

      <center>
      <input type="text" id="input" style="width: 200px;height: 35px" placeholder="ketik untuk mencari data">
      <button id="submit-btn" class="" style="width: 100px;height: 35px">Cari</button>
    </center>
        <div class="wikipedia-container">
          <h3 id="wikipedia-header">Hasil Pencarian Kotak Wikipedia</h3>
        <ul id="wikipedia-links">Ketikan Yang dicari Pada kotak</ul>
      </div>
      
</div>   
<script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>


