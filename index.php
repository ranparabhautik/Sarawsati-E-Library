<?php
include('dbconn.php');
?>

<?php
if (isset($_POST['signin'])) {
	//  echo "hello ";die;
	$u = $_POST['RollNo'];
	$p = $_POST['Password'];
	$c = $_POST['Category'];

	$sql = "select * from user where RollNo='$u'";

	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$x = $row['Password'];
	$y = $row['Type'];
	if (strcasecmp($x, $p) == 0 && !empty($u) && !empty($p)) { //echo "Login Successful";
		$_SESSION['RollNo'] = $u;
		$_SESSION['Type'] = $y;


		if ($y == 'Admin')
			header('location:admin/index.php');
		else
			header('location:student/index.php');
	} else {
		echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
	}
}

if (isset($_POST['signup'])) {
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$mobno = $_POST['PhoneNumber'];
	$rollno = $_POST['RollNo'];
	$category = $_POST['Category'];
	$type = 'Student';

	$sql = "insert into user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>alert('Registration Successful')</script>";
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('User Exists')</script>";
	}
}

?>




<!DOCTYPE html>
<html>

<!-- Head -->

<head>

	<title>Library Member Login Form </title>

	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->

<body>

	<h1>LIBRARY MEMBER LOGIN</h1>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" Name="RollNo" placeholder="RollNo" required="">
				<input type="password" Name="Password" placeholder="Password" required="">


				<div class="send-button">
					<!--<form>-->
					<input type="submit" name="signin" ; value="Sign In">
			</form>
		</div>

		<div class="clear"></div>
	</div>

	<div class="register">
		<h2>Sign Up</h2>
		<form action="index.php" method="post">
			<input type="text" Name="Name" placeholder="Name" required>
			<input type="text" Name="Email" placeholder="Email" required>
			<input type="password" Name="Password" placeholder="Password" required>
			<input type="text" Name="PhoneNumber" placeholder="Phone Number" required>
			<input type="text" Name="RollNo" placeholder="Roll Number" required="">

			<select name="Category" id="Category">
				<option value="CS&IT">CS&IT</option>
				<option value="FOBC">FOBC</option>
				<option value="FOET">FOET</option>
				<option value="FOH">FOH</option>
			</select>
			<br>


			<br>
			<div class="send-button">
				<input type="submit" name="signup" value="Sign Up">
		</form>
	</div>
	<p>By creating an account, you agree to our <a class="underline" href="terms.html">Terms</a></p>
	<div class="clear"></div>
	</div>

	<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p> &copy; 2024 Library Member Login. All Rights Reserved </a></p>
		<p><a class="underline" href="about.html">About the Project</a></p>
	</div>


</body>
<!-- //Body -->

</html>