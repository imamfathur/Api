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



// sql to delete a record
$id = $_GET["id"];
$sql = "DELETE FROM blog WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location: admin.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>