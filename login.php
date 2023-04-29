<?php
session_start();

if (isset($_SESSION['login'])) {
	//session login ditemukan lari ke halaman dashboard
	if ($_SESSION['login'] == true) {
		//kembali ke login
		header('Location:AdminLTE/starter.php');
	}
} else {
	//jika belum login tetap dihalaman login
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="icon" type="image/x-icon" href="img/ikon.jpg">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap-icons-1.9.1/bootstrap-icons.css">
 
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      #mainNav {
        margin: 0cm;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
 <div class="container">
<main class="form-signin w-100 m-auto text-center">
  <form action="validasiuser.php" method="POST" style=" box-shadow: 5px 5px 5px 5px;" >
  <div class="text-end">
  <a class="bi bi-x-circle text-white" href="index.php"></a>
  </div>
    <img class="mb-4 rounded-circle" src="img/logo1.jpg" alt="" width="72" height="57"  style=" box-shadow: 5px 5px;">
    

    <h1 class="h3 mb-3 fw-normal text-white">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label class="text-white">
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    
    <button class="w-50 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-white">&copy; ANGKRINGANKU</p>
  </form>
</main>
<?php
				if (isset($_GET['message'])) {
					switch ($_GET['message']) {
						case '0':
				?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>WARNING!</strong> Anda belum login Silakan Login Dulu.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
							break;
						case '1':
						?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>WARNING!</strong> Validasi User Anda Gagal. Username Anda Salah.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
							break;
						case '2':
						?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>WARNING!</strong> Validasi User Anda Gagal. Password Salah.
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<?php
							break;
					}
				}
				?>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
