<?php
 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum Masuk");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:user.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>
<head>
  <title>Edit Data</title>
  <body style="background: url(boston.jpg);color:white">
</head>
<center>
<form action="prosesdata.php" method="post" enctype="multipart/form-data"> 
 <table width="20%" align="center" cellspacing="5" cellpadding="5">
 	<tr> <td>Nama</td>
   <td>:<input type="name" name="nama">
   </td> </tr>
 	
 	<tr>
   <td>Nim</td>
   <td>:<textarea name="nim"></textarea></td>
  </tr>
  <tr>
   <td>Kota</td>
   <td>:<textarea name="kota"></textarea></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Posting">
    <input type="reset" name="reset" value="Reset">
   </td>
  </tr>
  </table>
</form>
</center>

