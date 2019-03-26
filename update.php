<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
</head>
<body>
	
<?php

 session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
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


 require_once("koneksi.php");
 $id=$_GET['id'];

 $sql="SELECT * FROM blog WHERE id=$id";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
    	

?>
 <title>Edit Data</title>
  <body style="background: url(boston.jpg);color:white">
	<form action="prosesupdate.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $row['id'] ?>">
	

<table width="50%" align="center" cellspacing="5" cellpadding="5">
	<tr>
   <td">Nama</td>
   <td>:<input type="text" name="nama" placeholder="nama" value="<?= $row['nama'] ?>"></td>
  </tr>
 	<tr>
 	 <td>NIM</td>
   <td>:<input name="nim"  value="<?= $row['nim'] ?>">
   </td>
    </tr>
    <tr>
 	 <td>Kota</td>
   <td>:<input name="kota"  value="<?= $row['kota'] ?>">
   </td>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
   </td>
  </tr>
  </table>
		
		</form>
		<?php
	}
}
?>

</body>
</html>
