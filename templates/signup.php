<?php 
include 'inc/header.php'; ?>

<div class="wrapper">
	<h2>Sign Up</h2>
	<p>Please fill this form to create an account</p>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : '' ; ?>" >
			<span class="invalid-feedback"><?php echo $username_err; ?></span>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control <?php echo(!empty($password_err)) ? 
			'is-invalid' : ''; ?>" >
			<span class="invalid-feedback"> <?php echo $password_err; ?></span>
		</div>
		<div class="form-group">
			<label>Confirm Password</label>
			<input type="password" name="confirm_password" class="form-control <?php echo(!empty($confirm_password_err)) ? 
			'is-invalid' : ''; ?>" >
			<span class="invalid-feedback"> <?php echo $password_err; ?></span>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Submit" name="submit">
			<input type="reset" class="btn btn-secondary ml-2" value="Reset">
		</div>
		<p>Already have an account? <a href="index.php">Login Here</a></p>
	</form>
</div>
<?php 
include 'inc/footer.php'; ?>