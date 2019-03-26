<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);   
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Tidak Ada <a href='login.php'>Kembali</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Harap Mengisikan Password Dengan Benar <a href='login.php'>Kembali</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
      $_SESSION['level'] = $hasil['level'];
      if($hasil['level']=="admin"){
            header("location:admin.php");
        }
    else if($hasil['level']=="guest"){
            header("location:user.php");
        }
     }
   }

?>