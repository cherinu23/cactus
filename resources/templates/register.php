<!-- REGISTER FORM -->
<?php if(count($errors) > 0): ?>
	<div class="alert alert-danger">
		<?php foreach($errors as $error): ?>
			<li><?php echo $error; ?></li>
		<?php endforeach; ?>
	</div>
<?php endif; ?>

<form id="register-form" action="" method="post" role="form" style="display: none;">
	<div class="form-group">
		<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php echo $username; ?>" required="required">
	</div>
	<div class="form-group">
		<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo $email; ?>" required="required">
	</div>
	<div class="form-group">
		<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
	</div>
	<div class="form-group">
		<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required="required">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col">
				<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
			</div>
		</div>
	</div>

</form>

<!-- REGISTER FORM END -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>


