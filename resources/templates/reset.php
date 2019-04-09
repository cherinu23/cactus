<?php 
require_once(realpath(dirname(__FILE__) . "/../config.php"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Reset your password</title>
 <!-- Bootstrap CSS -->
 <link href="<?php echo CSS_DIR ?>/css/bootstrap-4.2.1.min.css" rel="stylesheet" type="text/css"/>
 <!-- FontAwesome CSS -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!-- Custom CSS -->
 <link href="<?php echo CSS_DIR ?>/css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body class="g-bg-all">
  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="col-xs-8 col-sm-8 col-md-5">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <h3><i class="fas fa-key fa-4x"></i></h3>
              <h2>Forgot your password?</h2>
              <p>Enter your email address and we will send you a link to reset your password.</p>
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-envelope-square"></i>
                  </span>
                </div>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></input>
              </div>
              <button type="submit" class="btn btn-primary-2 btn-md btn-block">Reset password</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Custom JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="<?php echo JS_DIR; ?>/js/jquery-3.2.1.slim.min.js"></script>
  <!-- using normal jquery aswell because the slim version removes some functions -->
  <script type="text/javascript" src="<?php echo JS_DIR; ?>/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo JS_DIR; ?>/js/popper-1.12.9.min.js"></script>
  <script type="text/javascript" src="<?php echo JS_DIR; ?>/js/bootstrap-4.0.0.min.js"></script>
</body>
</html>