<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="<?= base_url('assets/'); ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?= base_url('assets/'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?= base_url('assets/'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?= base_url('assets/'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?= base_url('assets/'); ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <div class="login_wrapper">
      <div id="register">
        <section class="login_content">
          <form>
            <h1>Buat Akun</h1>
            <div>
              <input type="text" class="form-control" placeholder="Masukkan Nama Anda" id="nama" name="nama" />
            </div>
            <div>
              <input type="text" class="form-control" placeholder="Masukkan Username" id="username" name="username" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Ulangi Password" id="password" name="password2" />
            </div>
            <div>
              <button type="submit" class="btn btn-primary submit" href="">Daftar</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Sudah punya akun?
                <a href="" class="to_register"> Silahkan Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-desktop"></i> ES Komputer</h1>
                <p>©2019- Sistem Pakar Diagnosa Kerusakan Komputer Alfonso0087</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>