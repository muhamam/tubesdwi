<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		$error1 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Harus login dulu!</span>
</div></div>';
	} else if ($_GET['error'] == 2) {
		$error2 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Username belum diisi!</span>
</div></div>';
	} else if ($_GET['error'] == 3) {
		$error3 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Password belum diisi!</span>
</div></div>';
	} else if ($_GET['error'] == 4) {
		$error4 = '<div class="text-center">
<div class="alert bg-danger alert-styled-left">
<button type="button" class="close" data-dismiss="alert"><span>&times;</span>
<span class="sr-only">Close</span></button>
<span class="text-semibold">Diisi dengan benar!</span>
</div></div>';
	}
}
require_once('koneksi/database.php');

?>
<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/1.jpg);">
	<section class="ftco-section">
		<div class="container">
		<?php echo"$error1"; ?>		
		<?php echo"$error2"; ?>		
		<?php echo"$error3"; ?>		
		<?php echo"$error4"; ?> 
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Monitoring Tubuh Setelah Vaksin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Punya Akun? Silahkan masuk</h3>
						<form action="#" class="signin-form">
						<form action="koneksi/database.php" class="form-horizontal" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Username" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Password"
									required>
								<span toggle="#password-field"
									class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div> 
							<p class="w-100 text-center">Belum punya akun ? silahkan daftar</p>
								<div class="form-group">
								<a href="daftar.php" button type="submit" class="form-control btn btn-primary submit px-3">Register</a></button>
							</div>

							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>

						<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
						<div class="social d-flex text-center">
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-Google mr-2"></span>
								Google</a>
							<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
								Facebook</a>
							<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span>
								Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>