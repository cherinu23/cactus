<body class="g-bg-all body-tpage2">
	<div class="container">
		<div class="row no-gutters no-gutters2 mt-3 justify-content-center">
			<div class="col-md-2">
				<div class="card-img-top text-center">
					<img src="images/content/task2.svg" style="width:5em; height:8em; class="card-img-top" alt="..." >
				</div>
			</div>
		</div>
	</div>
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

								<!-- LOGIN FORM -->

								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required="required">
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
													<a href="resources/templates/reset.html" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>

								<!-- LOGIN FORM END -->