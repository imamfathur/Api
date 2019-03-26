 <?php
 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login <a href='login.php'>Login</a> disini");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="guest"){
	header('location:admin.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
	$username = $_SESSION['username']; 
	$level=$_SESSION['level'];
}
 require_once("koneksi.php");

$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>
<head>
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body style="background: url(boston.jpg);color:white">
</head>
<center>
      
</div> 

    <h2 style="font-family: Arial, Helvetica, sans-serif">Data Mahasiswa</h2>
  

    


<a href="logout.php"><input type="submit" value="Keluar" class="btn btn-success btn-lg" style="width: 100px;height: 35px"></a>

<br><br><br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Kota</th>
    <th>Di Update</th>
    
  </tr> 
 
  <?php

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
   
?>
  <tr>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nim'] ?></td> 
    <td><?= $row['kota'] ?></td>
     <td><?= $row['waktu'] ?></td>

   
  </tr>
<?php
    }
} 
$conn->close();

?>
</table>
<div id="kanan">
  <br><br> 
   <form id="form-container" class="form-container">

      <center>
      <input type="text" id="input" style="width: 200px;height: 35px" placeholder="ketik untuk mencari data">
      <button id="submit-btn" class="" style="width: 100px;height: 35px">Cari</button>
    </center>
      <br><br><br><br>
    <div class="wikipedia-container">
          <h3 id="wikipedia-header">Hasil Pencarian Kotak Wikipedia</h3>
        <ul id="wikipedia-links">Ketikan Yang dicari Pada kotak</ul>
      </div>
<script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>



