<!DOCTYPE html>
<html lang="en">
<head>
	<title>81 Outfitters | Coming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
			

	<div class="flex-w flex-str size1 overlay1">
		<div class="flex-w flex-col-sb wsize1 bg0 p-l-70 p-t-37 p-b-52 p-r-50 respon1">
			<div class="wrappic1 p-b-25">
				<a href="#">
					<img src="images/logo-tagline.png" alt="Logo">
				</a>
			</div>		
	
			<div class="w-full text-center">
				<h4>Styles & brands you love. Prices lower than you expect.</h4>
				<br>
				<h5>Great selection for women, men & kids.</h5>
				<br><br>
				<h3>Store Locations:</h3>
				<br>
				<p>
					2186 Northumberland Hwy<br>
					Lottsburg VA 22511
				</p>
				<hr>
				<p>
					808 Berryville Ave<br>
					Winchester VA 22601<br>
					(Coming September 2019)
				</p>
				<br>
				<h5>
					Shop our online store here!
					<!--<br>
					Coming Soon &#128522; -->
				</h5>
			</div>
			
			<div class="w-full p-t-50 p-b-90 p-l-48 p-l-0-md">
				
				<h3 class="l1-txt1 p-b-34 respon3">
					Coming Soon
				</h3>

				<p class="m2-txt1 p-b-46">
					Follow us for updates now!
				</p>

				<form class="contact100-form validate-form m-t-10 m-b-10" action="index.php" method="POST">
					<div class="wrap-input100 validate-input m-lr-auto-lg" data-validate = "Email is required: email@example.com">
						<input class="s2-txt1 placeholder0 input100 trans-04" type="text" name="email" id="email" placeholder="Email Address">

						<button class="flex-c-m ab-t-r size2 hov1 respon5">
							<i class="zmdi zmdi-long-arrow-right fs-30 cl1 trans-04"></i>
						</button>

						<div class="flex-c-m ab-t-l s2-txt1 size4 bor1 respon4">
							<span>Subcribe Now:</span>
						</div>
					</div>		
				</form>
				
			</div>
			
			<div class="flex-w flex-m">
				<!--<span class="m2-txt2 p-r-40">
					Follow us
				</span>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-15 m-b-5 m-t-5">
					<i class="fa fa-youtube-play"></i>
				</a>-->
			</div>
		</div>
			

		<div class="wsize2 bg-img1 respon2" style="background-image: url('images/clothing.jpg');">
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
<?php
	//echo '<h1>SUCCESS</h1>';
$conn = mysqli_connect('localhost','mburton9_michael','Mths3969','mburton9_81outfitters') or die('ERROR: ' . $conn->error);
if(isset($_POST['email'])){
	//echo '<h1>SUCCESS</h1>';
	$q = "SELECT * FROM `subscribers` WHERE `email` = '" . $_POST['email'] . "'";
	$g = mysqli_query($conn, $q) or die($conn->error);
	if(mysqli_num_rows($g) <= 0){
		$iq = "INSERT INTO `subscribers` (`IP`,`email`,`inactive`) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "','" . $_POST['email'] . "','No')";
		mysqli_query($conn, $iq) or die($conn->error);
		echo '<script>
						//alert("Success");
						document.getElementById("email").style.background = "#2BE028";
						document.getElementById("email").setAttribute("placeholder","Thank You For Subscribing!");
					</script>';
	}else{
		echo '<script>
						//alert("Success");
						document.getElementById("email").style.background = "#2BE028";
						document.getElementById("email").setAttribute("placeholder","Email is Already Subscribed!");
					</script>';
	}
}
?>

</body>
</html>