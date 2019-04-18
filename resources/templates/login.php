
<!-- LOGIN FORM -->
<form id="login-form" action="" method="post" role="form" style="display: block;">
	<?php if(count($errors) > 0): ?>
		<div class="alert alert-danger">
			<?php foreach($errors as $error): ?>
				<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<div class="form-group">
		<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required="required">
	</div>
	<div class="form-group">
		<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="required">
	</div>
	<div class="form-group">
		<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
		<label for="remember"> Remember Me</label>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col">
				<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col">
				<div class="text-center">
					<a href="resources/templates/reset.php" tabindex="5" class="forgot-password">Forgot Password?</a>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- LOGIN FORM END -->

