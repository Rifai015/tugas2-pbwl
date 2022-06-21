<!DOCTYPE html>
<html>

<head>
	<title>Tugas 2 PBWL</title>
	<link rel="stylesheet" href="<?php echo AST; ?>/css/bootstrap.min.css">
</head>

<body>
	<h3>Login</h3>

	<form action="<?php echo URL; ?>/home/index" method="post">
	<div class="form-floating mb-3">
		<input type="email" class="form-control" name="user_email" required>
		<label for="floatingInput">Email address</label>
	</div>
	<div class="form-floating">
		<input type="password" class="form-control" name="user_password" require>
		<label for="floatingPassword">Password</label>
	</div>
	<br>
	<div class="d-grid gap-2 col-6 mx-auto">
		<button class="btn btn-primary" type="submit" name="b_login" value="Login">LOGIN</button>
		<div class="container mt-3">

			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</div>


		<script src="<?php echo AST; ?>/js/bootstrap.bundle.js"></script>
</body>

</html>