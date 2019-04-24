<?php 
require_once(realpath(dirname(__FILE__) . "/../config.php"));
require(LIBRARY_PATH . "/contry.php");
require(LIBRARY_PATH . "/addTask.php");
// if not logged in it will head back to index.php
// if(!isset($_SESSION['id'])) {
//   header('Location: /../index.php');
//   exit();
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Taskpage</title>
 <!-- Bootstrap CSS -->
 <link href="<?php echo CSS_DIR ?>/css/bootstrap-4.2.1.min.css" rel="stylesheet" type="text/css"/>
 <!-- FontAwesome CSS -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!-- Custom CSS -->
 <link href="<?php echo CSS_DIR ?>/css/custom.css" rel="stylesheet" type="text/css"/>
</head>
<body class="body-tpage g-bg-all">


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light2 border-right2" id="sidebar-wrapper">
      <div class="sidebar-heading">CACTUS</div>
      <div class="list-group list-group-flush">
        <div class="list-group-item list-group-item-action list-group-item-primary">
          <a href="#" class="ptab1 ">Idei</a>
        </div>
        <div class="list-group-item list-group-item-action list-group-item-secondary">
          <a href="#" class="ptab2">Planificare</a>
        </div>
        <div class="list-group-item list-group-item-action list-group-item-success">
          <a href="#" class="ptab3">Dezvoltare</a>
        </div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">


      <nav class="navbar navbar-expand-lg navbar-light bg-light2 border-bottom2">
        <button class="btn btn-primary-2" id="menu-toggle">Open Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="btn btn-primary-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item dropdown-item2" href="#">Action</a>
                <a class="dropdown-item dropdown-item2" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item dropdown-item2" href="/../index.php?logout=1">Sign out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <!-- shows you are logged in and after refreshing the page the alert/message disapears  -->
        <?php if(isset($_SESSION['message'])): ?>
          <div class="alert <?php echo $_SESSION['alert-class']; ?> col-md-3">
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&#8855;</span>
          </button>
          <?php 
          echo $_SESSION['message']; 
          unset($_SESSION['message']); 
          unset($_SESSION['alert-class']); 
          ?>
        </div>
      <?php endif;?>

      <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
      <!-- if the account is not verified message will display -->
      <?php if(!$_SESSION['verified']): ?>
        <div class="alert alert-warning col-md-3">
          You need to verify your account.
          Sign in to your email account and click on the verification link we just emailed you at
          <strong><?php echo $_SESSION['email']; ?></strong>
        </div>
      <?php endif; ?>

      <?php if($_SESSION['verified']): ?>
        <button class="btn btn-primary-2">I am verified!</button>
      <?php endif; ?>
    </div>
    <div class="container-fluid container-fluid2">
      <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
          <?php foreach($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <div id="tabu1">
        <form method="post" action="">
          <div class="input-group mb-3">
            <input type="text" name="task" class="form-control" placeholder="Add task here" aria-label="Add task here" aria-describedby="button-addon2">
            <div class="input-group-append">
            <button class="btn btn-primary-2" type="submit" id="button-addon2" name="submit-task">Add Task</button>
            </div>
          </form>
        </div>
        

      </div>
      <div id="tabu2">Aici va fi adaugata planificarea</div>
      <div id="tabu3">Aici vom adauga proiectele in lucru</div>
    </div>

  </div>

</div>
<!-- Footer -->
<footer class="footer">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://github.com/cherinu23/cactus"> cactus.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<!-- /#page-content-wrapper -->



<!-- Custom JavaScript -->
<!-- put custom js here -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="<?php echo JS_DIR; ?>/js/jquery-3.2.1.slim.min.js"></script>
<!-- using normal jquery aswell because the slim version removes some functions -->
<script type="text/javascript" src="<?php echo JS_DIR; ?>/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo JS_DIR; ?>/js/popper-1.12.9.min.js"></script>
<script type="text/javascript" src="<?php echo JS_DIR; ?>/js/bootstrap-4.0.0.min.js"></script>
<!-- Menu Toggle Script -->
<script>
//toggle la meniu
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
  //ancora pentru taskuri
  $('[class^="ptab"]').on('click', function(e){
    e.preventDefault();
    var numb = this.className.replace('ptab', '');
    $('[id^="tabu"]').hide();
    $('#tabu' + numb).show();
  });
</script>

</body>
</html>