<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="home.css" />
		<link rel="stylesheet" type="text/css" href="register.css" />
		<script type="text/javascript" src="register.js" ></script>
	</head>
	<body>
		<div id="dashboard">
			<p>Register with <em><a href="index.html">Feed Reader</a></em> to obtain all feeds at one place!</p>
		</div>
		
		<div id="wrapper">
			<div id="registration">
				<form id="reg" onsubmit="validate(this)" method="post" action="createuser.php">
					<!--Email id, password, repw, fname, lname -->
					* Email id:<br /><input type="text"  size="50" name="emailid" /><br />
					* Password: <br /><input type="password" size="25" name="password" /><br />
					* Re-enter Password: <br /><input type="password" size="25" name="repassword" /><br />
					* First Name:<br /><input type="text"  size="50" name="fname" /><br />
					* Last Name:<br /><input type="text"  size="50" name="lname" /><br />
				
					<div id="captcha">
						Here will come the captcha
					</div>
					<input type="submit" value="Sign Up" />
					<input type="reset" value="Clear" />
				</form>
			</div>
		</div>
	</body>
</html>