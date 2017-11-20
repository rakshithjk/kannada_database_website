<?php
if(!empty($_POST["register-user"])) {
	/* Form Requiwhite Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($error_message)) {
		if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$error_message = "Invalid Email Address";
		}
	}

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are requiwhite";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}
	
	/*Validation to check if unique username*/
	if(!isset($error_message)) {
		$my_file = 'users.txt';
		$handle = fopen($my_file, 'r+');
		$flag=0;
		$data = fread($handle,filesize($my_file)+1);
		$arr = explode(",,", $data);
		$user_data = [];
		foreach($arr as $value) 
		{
			$user_data[] = explode(",", $value);
		}
		
		for ($i = 0;$i <count($arr);$i++)
		{
			if($user_data[$i][0]==$_POST["username"]) 
			{
				$flag=1;
			}
			if($flag==1)
			{
				break;
			}
		}
		if($flag==1)
			{
				$error_message = "please choose unique username";
			}
		fclose($handle);
	}
	

	if(!isset($error_message))
	{
		$my_file = 'users.txt';
		$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
			$username = $_POST["username"];
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			$gender = $_POST["gender"];
			$delimt = ",";
		$data = $username.$delimt.$password.$delimt.$firstname.$delimt.$lastname.$delimt.$delimt.$email.$delimt.$gender.",,";
		fwrite($handle, $data);
		fclose($handle);
		echo " <script>alert('account succesfully created');</script>; ";
		$_SESSION['username']=$_POST["username"];
			header("Location:login.php");
			exit();
	}
}
?>

<html>
<head>
<meta charset="utf-8">
<title>KANNADA DATABASE</title>

<style type="text/css">

.main-nav li{
	display: inline-block;
	margin-left: 20px;

}
.main-nav li a{
	color: white;
	text-decoration: none;
	font-size: 90%;
	font-weight: bold;
}
.main-nav li a:hover{
	color: black;
	border-bottom: 2px solid #e67e22;
	transition: all 0.5s ease-in;
	padding: 15px 0;
}

div #login{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: linear-gradient(to bottom, #ff3300 0%, #ffff00 100%);height:100px;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>
<body style="background: linear-gradient(to right, gray , white);">
<img src="img/logo.png" style="height: 250px;float: left;margin-top: -40px;margin-left:-50px;">
<div style="background: linear-gradient(to bottom, #ff3300 0%, #ffff00 100%);height:100px;">
<br>
	<ul class="main-nav" >
	     <li><a class="current" href="index.html"><span style="color:red;">HOME</span></a></li>
		 		<li><a  href="movies.php"><span style="color:red;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:red;">LITERATURE</span></a></li>
		<li><a href="songs.php"><span style="color:red;">SONGS</span></a></li>
		<li><a href="forum.php"><span style="color:red;">FORUM	</span></a></li>
		 <li><a href="login.php"><span class="login" id="login" style="color:red;visibility:visible;font-size:18px;">SIGN-IN/REGISTER</span></a></li>
	</ul>	
<script>
var a = "<?php echo $sess; ?>";	
if (a == 1)
{
	var lin = document.getElementById("login").style;
	var lot = document.getElementById("logout").style;
	lin.visibility ="hidden";
	lin.display="none";
	lot.visibility="visible";
}
if ( a==0 )
{
	var lin = document.getElementById("login").style;
	var lot = document.getElementById("logout").style;
	lin.visibility ="visible";
	lot.visibility="hidden";
	lot.display="none";
}

</script>	
</div>
<div id="login">
<h1><strong>Welcome.</strong> Please fill the following details.</h1>
<body>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td><span style="color:white;">*</span>marked fields are mandatory</td>;
<tr>
<td>User Name<span style="color:white;">*</span></td>
<td><input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"></td>
</tr>
<tr>
<td>First Name<span style="color:white;">*</span></td>
<td><input type="text" class="demoInputBox" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></td>
</tr>
<tr>
<td>Last Name<span style="color:white;">*</span></td>
<td><input type="text" class="demoInputBox" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></td>
</tr>
<tr>
<td>Password<span style="color:white;">*</span></td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td>Confirm Password<span style="color:white;">*</span></td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Email<span style="color:white;">*</span></td>
<td><input type="text" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
</tr>
<tr>
<td>Gender<span style="color:white;">*</span></td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body></html>



</div> <!-- end login -->
</body>
</html>