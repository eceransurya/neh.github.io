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
        <section class="page-section">
          <div class="container">
              <div class="product-item">
                  <div class="product-item-title d-flex">
                      <div class="bg-faded p-5 d-flex ms-auto rounded">
                          <h2 class="section-heading mb-0" style="color: rgb(56, 53, 53);">
                              
                              <span class="section-heading-lower">STMJ</span>
                          </h2>
                      </div>
                  </div>
                  <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/MIN01.jpeg" alt="..." />
                  <div class="product-item-description d-flex me-auto">
                      <div class="bg-faded p-5 rounded"><p class="mb-0">Minuman ini umumnya diincar pengunjung saat malam atau pagi hari, itu karena khasiatnya yang mampu menghangatkan tubuh. Selain itu, STMJ juga tergolong minuman yang menyehatkan karena menggunakan bahan-bahan alami, seperti jahe, cengkeh, madu, telur, dan susu.
                      </p></div>
                  </div>
              </div>
          </div>
      </section>
      <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <h2 class="section-heading mb-0" style="color: rgb(56, 53, 53);">
                            
                            <span class="section-heading-lower">WEDANG</span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/MIN02.jpg" alt="..." />
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0">Satu lagi menu angkringan yang ampuh sebagai penangkal dingin, yaitu wadang. Minuman ini terbuat dari jahe, serai, dan gula merah yang dimasak bersama daun pandan untuk menambah aromanya. Berbeda dengan STMJ yang menggunakan susu dan telur
                    </p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
      <div class="container">
          <div class="product-item">
              <div class="product-item-title d-flex">
                  <div class="bg-faded p-5 d-flex ms-auto rounded">
                      <h2 class="section-heading mb-0" style="color: rgb(56, 53, 53);">
                          
                          <span class="section-heading-lower">TEH KAMPUL</span>
                      </h2>
                  </div>
              </div>
              <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/MIN03.jpg" alt="..." />
              <div class="product-item-description d-flex me-auto">
                  <div class="bg-faded p-5 rounded"><p class="mb-0">Teh kampul adalah nama lain dari sajian teh hangat dengan jeruk wedang yang manis. Minuman ini juga menjadi menu angkringan favorit karena rasanya yang menyegarkan.
                  </p></div>
              </div>
          </div>
      </div>
  </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>