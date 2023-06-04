<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	if (empty($email) || empty($password)) {
		$error = 'Please fill in all fields.';
	} else {
		$username->getUserByEmail($email);
		if ($username->getId() && password_verify($password, $username->getPassword())) {
			$_SESSION['username$username'] = serialize($username->getId());
			header('Location:/ ');
			exit;
		} else {
			$error = 'Invalid email or password.';
		}
	}
}
?>
<section class="authpage">
	<div class="auth">
		<form method="post">
			<h1>Login</h1>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email"><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<?php if (isset($error)): ?>
				<p style="color: red;">
					<?php echo $error; ?>
				</p>
			<?php $error=NULL; endif; ?><br>
			<button type="submit">Login</button>
		</form>
	</div>
</section>