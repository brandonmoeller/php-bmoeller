<html>

<head>
  <title>Shareboard</title>
  <!-- bootstrap 5.2.2 CSS only -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="/lab/shareboard/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  //
  // ARCHIVE
  //
  // <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  //   <div class="container">
  //     <a class="navbar-brand" href="#">Shareboard</a>
  //     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  //       <span class="navbar-toggler-icon"></span>
  //     </button>
  //     <div class="collapse navbar-collapse" id="navbarSupportedContent">
  //       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  //         <li class="nav-item">
  //           <a class="nav-link" aria-current="page" href="<?php echo ROOT_URL; __">Home</a><!--  active -->
  //         </li>
  //         <li class="nav-item">
  //           <a class="nav-link" href="<?php echo ROOT_URL; __shares">Shares</a>
  //         </li>
  //         <li class="nav-item dropdown">
  //           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  //             Join Us
  //           </a>
  //           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  //             <li><a class="dropdown-item" href="<?php echo ROOT_URL; __users/login">Login</a></li>
  //             <li><a class="dropdown-item" href="<?php echo ROOT_URL; __users/register">Register</a></li>
  //             <!-- <li><hr class="dropdown-divider"></li>
  //               <li><a class="dropdown-item" href="#">Something else here</a></li> -->
  //           </ul>
  //         </li>
  //         <!-- <li class="nav-item">
  //             <a class="nav-link disabled">Disabled</a>
  //           </li> -->
  //       </ul>
  //       <form class="d-flex" role="search">
  //         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  //         <button class="btn btn-outline-success" type="submit">Search</button>
  //       </form>
  //     </div>
  //   </div>
  // </nav>
  //
  ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo ROOT_URL; ?>">Home</a><!--  active -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Join Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
              <li><a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
              <!-- <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li> -->
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <?php require($view); ?>
    </div>
  </div>

  <?php
  //
  // ARCHIVE
  //
  // <div class="container">
  //   <div class="row">
  //     <?php require($view); __
  //   </div>
  // </div>
  //
  ?>

  <!-- <div class="container my-5">
      <h1>Hello, world!</h1>
      <div class="col-lg-8 px-0">
        <p class="fs-5">You've successfully loaded up the Bootstrap starter example. It includes <a href="https://getbootstrap.com/">Bootstrap 5</a> via the <a href="https://www.jsdelivr.com/package/npm/bootstrap">jsDelivr CDN</a> and includes an additional CSS and JS file for your own code.</p>
        <p>Feel free to download or copy-and-paste any parts of this example.</p>

        <hr class="col-1 my-4">

        <a href="https://getbootstrap.com" class="btn btn-primary">Read the Bootstrap docs</a>
        <a href="https://github.com/twbs/examples" class="btn btn-secondary">View on GitHub</a>
      </div>
    </div> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!-- <script src="main.js"></script> -->
</body>

</html>