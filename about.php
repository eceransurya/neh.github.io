<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
     
     <!-- isi -->
     <section class="page-section about-heading">
      <div class="container">
          <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="..." />
          <div class="about-heading-content">
              <div class="row">
                  <div class="col-xl-9 col-lg-10 mx-auto">
                      <div class="bg-faded rounded p-5">
                          <h2 class="section-heading mb-4">
                              <span style="color: black;" class="section-heading-upper">Warung HIK/Angkringan</span>
                              <span style="color: black;" class="section-heading-lower">About warung HIK</span>
                          </h2>
                          <p>Warung “Hik” atau Angkringan bukan saat ini saja ada, warung tersebut merupakan sebuah budaya kuliner yang telah berkembang lama bila kita melihat pada foto-foto masa kolonial yang ada. Warung-warung ini berkembang di pinggir-pinggir jalan dan juga di beberapa pasar dengan hidangan yang merupakan produk lokal masyarakat setempat.</p>
                          <p class="mb-0">
                            Warung Hik atau Angkringan menjadi tempat mengobrol yang bebas baik untuk berbagi informasi maupun untuk berdiskusi kecil. Dan ia juga mampu memberikan kekuatan ekonomi bagi masyarakat kecil yang semakin tergusur oleh berbagai warung-warung makan modern semacam franchise. Tak pelak lagi menikmati hidangan di warung Hik atau Angkringan mampu memberikan nostalgia masa lampau kita akan budaya dan masyarakat kita.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>