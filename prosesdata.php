 <?php
 require_once("koneksi.php");



 $nama = $_POST['nama'];
 $nim = $_POST['nim'];
 $kota=$_POST['kota'];
//  if(!$gambar){
//  	return false;
//  }


$sql = "INSERT INTO blog VALUES (NULL,'$nama', '$nim','$kota',null)";

if ($conn->query($sql) === TRUE) {
    header('location:admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>