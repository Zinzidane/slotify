<?php 
	if(isset($_POST['loginButton'])) {
		echo 'Login button was pressed';
	}

	if(isset($_POST['registerButton'])) {
		echo 'Register button was pressed';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Slotify</title>
</head>
<body>
	<div id="inputContainer">
		<form action="register.php"  method="POST" id="loginForm">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUserName">Username</label>
				<input id="loginUserName" name="loginUserName" placeholder="bart" type="text" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>
			<button type="submit" name="loginButton">LOG IN</button>
		</form>
		<form action="register.php"  method="POST" id="registerForm">
			<h2>Create your free account</h2>
			<p>
				<label for="registerUserName">Username</label>
				<input id="registerUserName" name="registerUserName" placeholder="bart" type="text" required>
			</p>
			<p>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" placeholder="First name" type="text" required>
			</p>
			<p>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" placeholder="Last name" type="text" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" placeholder="test@test.com" type="email" required>
			</p>
			<p>
				<label for="emailConfrim">Email confirm</label>
				<input id="emailConfirm" name="emailConfirm" placeholder="test@test.com" type="email" required>
			</p>
			<p>
				<label for="registerPassword">Password</label>
				<input id="registerPassword" name="registerPassword" type="password" required>
			</p>
			<p>
				<label for="passwordConfirm">Password confirm</label>
				<input id="passwordConfirm" name="passwordConfirm" type="password" required>
			</p>
			<button type="submit" name="registerButton">SIGN UP</button>
		</form>
	</div>
</body>
</html>