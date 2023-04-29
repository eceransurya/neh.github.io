<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="img/ikon.jpg">
    <link rel="stylesheet" href="css/styles.css">
   
  </head>
  <body>
    <!-- navbar -->
     <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-lg-2 bg-opacity-50" id="mainNav">
      <div class="container-fluid bg-opacity-50">
        <a href="#" class="navbar-brand">
          <img src="img/logo1.jpg" alt="" width="100" height="90" class="rounded-circle" style=" box-shadow: 5px 5px;" >
        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#gas" aria-controls="gas" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>

        <div class="collapse navbar-collapse" id="gas">
          <ol class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4 ">
            <a href="index.php" class="nav-link text-uppercase"> 
              home
            </a> 
            </li>
            <li class="nav-item px-lg-4">
              <a href="about.php" class="nav-link text-uppercase"> 
                  about
                </a> 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  menu
                  </a>
                  <ul class="dropdown-menu" id="drop">
                    <li><a class="dropdown-item text-uppercase" href="makan.php">makan</a></li>
                    <li><a class="dropdown-item text-uppercase" href="minum.php">minum</a></li>
                    <li><a class="dropdown-item text-uppercase" href="camilan.php">cemilan</a></li>
                  </ul>
                </li>
                <li class="nav-item px-lg-4 ">
                  <a href="STORE.php" class="nav-link text-uppercase"> 
              store
            </a> 
            </li>
            <li class="nav-item px-lg-4 ">
            <a href="login.php" class="nav-link text-uppercase"> 
              login
            </a> 
            </li>
          </ol>
        </div>
        
      <form class="d-flex" role="PESEN OPO ?">
      <input class="form-control me-2" type="PESEN OPO ?" placeholder="PESEN OPO ?" aria-label="PESEN OPO ?">
        <a href="login.php"><button class="btn btn-success" type="submit">
          GOLEK
          </button></a>
          </form>
                </div>
        </nav>
        
     <!-- end navbar -->
    <!-- jumbotron -->
<div class="jumborton">
<h2 class="section-heading mb-4" style="color: white;">
  <span class="section-heading-upper">ANGKRINGANKU</span>
  <span class="section-heading-lower">DRINKEN EN ETEN</span>
</h2>
</div>
   

    <section class="page-section clearfix">
      <div class="container">
          <div class="intro">
              <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="..." />
              <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                 
                  <p class="mb-xxl-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati doloribus sit, error amet eligendi cum? Aut numquam, natus tenetur sapiente maxime vitae sunt eligendi dicta voluptas veniam ab provident amet!</p>
                  <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="https://www.instagram.com/hamdanhabibulloh/">Visit Us Today!</a></div>
              </div>
          </div>
      </div>
  </section>
    <!-- end jumbotron -->
     <!-- footer -->
  <footer class="footer text-faded text-center py-5">
  <div class="container"><p class="m-0 small">Copyright &copy; ANGKRINGANKU 2022</p></div>
  </footer>
     <!-- footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>