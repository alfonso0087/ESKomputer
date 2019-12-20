<!doctype html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?= base_url('assets2'); ?>/img/favicon2.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?= $judul; ?></title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="<?= base_url('assets2'); ?>/css/bootstrap.css" rel="stylesheet" />
  <link href="<?= base_url('assets2'); ?>/css/landing-page.css" rel="stylesheet" />


  <!--     Fonts and icons     -->
  <link href="<?= base_url('assets2'); ?>/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
  <link href="<?= base_url('assets2'); ?>/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body class="landing-page landing-page2">
  <nav class="navbar  navbar-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar bar1"></span>
          <span class="icon-bar bar2"></span>
          <span class="icon-bar bar3"></span>
        </button>
        <a href="#home">
          <!-- Navbar Judul Pojok Kiri -->
          <div class="logo-container">
            <div class="logo">
              <img src="<?= base_url('assets2'); ?>/img/ESC.png" alt="Expert System Computer">
            </div>
            <div class="brand">
              ES <br>Computer
            </div>
          </div>
          <!-- End of Navbar Judul Pojok Kiri -->
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="example">
        <!-- Navbar Kanan -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="<?= base_url('member/index'); ?>" class="page-scroll">
              <i class="fa fa-home"></i>
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#">
              <i class="fa fa-user"></i>
              <?= $user['nama_user']; ?>
            </a>
          </li>
          <li>
            <a href="<?= base_url('auth'); ?>" onclick="return confirm('Yakin Keluar?');">
              <i class="fa fa-sign-out"></i>
              Logout
            </a>
          </li>
        </ul>
        <!-- End of Navbar Kanan -->
      </div>
      <!-- /.navbar-collapse -->
    </div>
  </nav>