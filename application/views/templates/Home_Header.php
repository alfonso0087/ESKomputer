<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" /> -->

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/magnific-popup.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?= base_url('assets2/'); ?>css/style.css">

  <!-- Modernizr JS -->
  <script src="<?= base_url('assets2/'); ?>js/modernizr-2.6.2.min.js"></script>


</head>

<body>

  <div class="colorlib-loader"></div>

  <div id="page">
    <!-- Navigation -->
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div id="colorlib-logo"><a href="<?= base_url('Home'); ?>">ESKomputer</a></div>
            </div>
            <div class="col-md-10 text-right menu-1">
              <ul style="color: white;">
                <li><a href="<?= base_url('Home'); ?>">Home</a></li>
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="<?= base_url('Auth'); ?>">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- End of Navigation -->