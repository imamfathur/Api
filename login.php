<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Halaman Masuk</title>
	<form action="proseslogin.php" method="post">
	<body style="background: url(boston.jpg);">
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<br>
				<br>
				<h2 style="color : white;">Masuk</h2>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username" required=""> 
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password" required=""> 
					</div>
					<br>
					<div class="form-group">
						<input type="submit" value="Login" class="btn btn-success btn-lg">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a style="color : white;" href="daftar.php">Buat akun baru</a>
				</div>
			
			</div>
		</div>
	</div>
</div>
</body>
</html>



<!--


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="style.css">
	<form action="proseslogin.php" method="post">
</head>
<body>


	<div class="box">
		<h2>Login</h2>
	<form>
		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>password</label>
		</div>
		<!-- <div class="inputBox">
		<label>remeber me</label>
		<input type="checkbox" name="remeber"> 
		</div>
		<input type="submit" name="submit" value="submit">
		<button> <a href="daftar.php">register</a></button>
	
	</form>
	</div>
	
</body>
</html> --> -->