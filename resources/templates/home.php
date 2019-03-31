<!-- TO BE TEMPLATED -->
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Taskpage</title>
 <!-- CDN/Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <!-- CDN/FontAwesome CSS -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!-- LocalCustom CSS -->
 <link rel="stylesheet" href="/css/pref.css">
</head>
<body class="body-tpage g-bg-all">


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light2 border-right2" id="sidebar-wrapper">
      <div class="sidebar-heading">Portif</div>
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
                <a class="dropdown-item dropdown-item2" href="#">Sign out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="mt-4">Portif tasks to be added here</h1>
        <div id="tabu1">Aici vor fi adaugate ideile</div>
        <div id="tabu2">Aici va fi adaugata planificarea</div>
        <div id="tabu3">Aici vom adauga proiectele in lucru</div>

      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

  <!-- CDN/jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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