<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$uname = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

	if (empty($uname) || empty($email) || empty($password)) {
		$error = 'Please fill in all fields.';
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = 'Please enter a valid email.';
	} elseif ($username->getUserByEmail($email)) {
		$error = 'Email already in use.';
	} else {
		$username->createUser($uname, $email, $password);
		header('Location: /');
		exit;
	}
	
}
?>

<section class="authpage">
	<div class="auth">
		<form method="post">
			<h1>Register</h1>
			<?php if (isset($error)): ?>
				<p style="color: red;">
					<?php echo $error; ?>
				</p>
			<?php endif; ?>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username"><br>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email"><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password"><br>
			<button type="submit">Register</button>
		</form>
	</div>
</section>