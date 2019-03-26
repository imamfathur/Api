<?php
   session_start();
  
?>

<!DOCTYPE HTML>  
<html>
<head>

<form action="prosesdaftar.php" method="post">
  
</head>
<body style="background: url(boston.jpg); color:white"> 

<h2> Form Data </h2> 
<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>username</td>
   <td>:<input type="text" name="username" >
  </tr>
  <tr>
   <td>password</td>
   <td>:<input type="password" name="password">
  </tr>
  <td>
    <input checked="checked" type="radio" name="gender" value="Male">Laki-Laki
  <input type="radio" name="gender" value="Female">Perempuan
</td>
  <tr>
   <td>level</td>
   <td>:<form action="/action_page.php">
  <select name="level">
    <option value="">===Pilih level===</option>
     <option value="admin">Admin</option>
     <option value="guest">Guest</option>
  </select>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
  <tr>
    <td><a href="login.php">sudah punya akun?</a></td>
  </tr>

  
</table>
</form>
</body>
</html>