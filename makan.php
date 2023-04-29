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
                      <h2 class="section-heading mb-0" style="color:  rgb(56, 53, 53);">
                          
                          <span class="section-heading-lower">TEMPE MENDOAN</span>
                      </h2>
                  </div>
              </div>
              <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/prd01.jpg" alt="..." />
              <div class="product-item-description d-flex me-auto">
                  <div class="bg-faded p-5 rounded"><p class="mb-0">Siapa sih yang tidak mengenal olahan tempe satu ini? 
                    Berasal dari wilayah Banyumas, mendoan hadir sebagai menu angkringan wajib yang banyak diburu pengunjung.
                    Rasanya gurih dan sangat nikmat jika dimakan bersama sepiring nasi.
                    Keunikan dari gorengan tempe ini terletak pada hasilnya yang cenderung lembek dan setengah matang,
                    sangat berbeda dengan jenis gorengan lain yang biasanya justru kering dan renyah. Fakta ini sesuai dengan asal namanya,
                     mendo yang berarti setengah matang dalam Bahasa Banyumas.</p></div>
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
                        
                        <span class="section-heading-lower">ANEKA BACEMAN</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/prd02.png" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Kebanyakan makanan khas Jawa memang memiliki cita rasa yang manis, tidak terkecuali bacem. Buat kamu yang belum tahu, bacem sebenarnya adalah cara mengolah makanan dengan merendamnya dalam air gula atau garam. Awalnya, teknik ini bertujuan agar bahan makanan bisa bertahan lebih lama.
                  Ada banyak bahan makanan yang bisa dibuat bacem, namun yang paling populer di masyarakat adalah tempe dan tahu. Karena murah dan mudah didapat, tempe serta tahu bacem pun hampir selalu menjadi salah satu menu angkringan andalan.
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
                      
                      <span class="section-heading-lower">SEGO KUCING</span>
                  </h2>
              </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/PRD03.jpg" alt="..." />
          <div class="product-item-description d-flex me-auto">
              <div class="bg-faded p-5 rounded"><p class="mb-0">Bisa dibilang, sego kucing atau yang lebih akrab dikenal sebagai nasi kucing ini merupakan menu angkringan Jogja legendaris. Itu karena kamu bisa menemuinya di hampir seluruh angkringan. Yang menjadikan menu ini spesial adalah harganya yang kelewat murah.
                Asal usul nama sego kucing atau nasi kucing sendiri berasal dari ukuran porsinya yang kecil. Jika dilihat sekilas, menu ini terlihat seperti makanan untuk kucing. Namun, sekalipun kecil, harganya yang murah tetap membuatnya laku diburu pelanggan.
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
                      
                      <span class="section-heading-lower">TAHU ISI</span>
                  </h2>
              </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/PRD04.jpg" alt="..." />
          <div class="product-item-description d-flex me-auto">
              <div class="bg-faded p-5 rounded"><p class="mb-0">Selain mendoan, kamu juga bisa menemukan gorengan tahu isi di daftar menu angkringan kekinian. Isi dari gorengan ini biasanya menggunakan campuran dari berbagai sayuran, seperti tauge, wortel, dan kol.
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
                      
                      <span class="section-heading-lower">OSENG SOUN</span>
                  </h2>
              </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/PRD05.jpg" alt="..." />
          <div class="product-item-description d-flex me-auto">
              <div class="bg-faded p-5 rounded"><p class="mb-0">Menu angkringan berikut ini biasanya kamu temukan di berbagai angkringan Solo. Terbuat dari bihun yang dimasak bersama bumbu kecap dan cabai hijau, oseng soun adalah teman makan nasi yang wajib kamu coba saat pergi ke angkringan. Penambahan cabai hijau juga dijamin akan membuat nafsu makanmu meningkat!
              </p></div>
          </div>
      </div>
  </div>
</section>
  <!-- end isi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>