<?php

 require_once("koneksi.php");
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $nim=$_POST['nim'];
 $kota=$_POST['kota'];

 $update = "UPDATE blog SET nama='$nama', nim='$nim', kota='$kota' WHERE id='$id'";

 if ($conn->query($update)===TRUE){
 	header('location:admin.php');
 }else{
 	echo "error updating record";
 }
 ?>



 