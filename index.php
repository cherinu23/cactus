<?php    
    // load up your config file
require_once("/var/www/cactus.com/public_html/resources/config.php");
require_once(TEMPLATES_PATH . "/header.php");

?>

<!--TO BE KEPT IN INDEX.PHP -->
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xs-8 col-sm-8 col-md-5">
			<div class="card card-login">
				<div class="card-heading">
					<div class="row">
						<div class="col">
							<a href="#" class="active" id="login-form-link">Login</a>
						</div>
						<div class="col">
							<a href="#" id="register-form-link">Register</a>
						</div>
					</div>
					<hr>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<form id="login-form" action="" method="post" role="form" style="display: block;">
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
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
												<a href="resources/templates/psreset.html" tabindex="5" class="forgot-password">Forgot Password?</a>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!--MAKE A SEPARATE FILE CALLED REGISTER.PHP -->
							<form id="register-form" action="" method="post" role="form" style="display: none;">
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>