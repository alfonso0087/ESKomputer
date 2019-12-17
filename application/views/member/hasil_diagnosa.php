<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><span>ESC</span>Computer</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="<?= base_url('member/index'); ?>" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><span><?= $user['nama_admin']; ?></span></a></li>
          <li class="nav-item"><a href="<?= base_url('auth'); ?>" class="nav-link"><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
      <div class="row">
        <div class="col-lg">

          <div class="page three">
            <h2 class="heading">Hasil Diagnosa</h2>
            <div class="row progress-circle mb-5">
              <div class="col-lg-4 mb-4">
                <div class="bg-white rounded-lg shadow p-4">
                  <h2 class="h5 font-weight-bold text-center mb-4">Nama Kerusakan</h2>

                  <!-- Progress bar 1 -->
                  <div class="progress mx-auto" data-value='90'>
                    <span class="progress-left">
                      <span class="progress-bar border-primary"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar border-primary"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                      <div class="h2 font-weight-bold">XX<sup class="small">%</sup></div>
                    </div>
                  </div>
                  <!-- END -->
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="bg-white rounded-lg shadow p-4">
                  <h2 class="h5 font-weight-bold text-center mb-4">Nama Kerusakan</h2>

                  <!-- Progress bar 1 -->
                  <div class="progress mx-auto" data-value='80'>
                    <span class="progress-left">
                      <span class="progress-bar border-primary"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar border-primary"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                      <div class="h2 font-weight-bold">XX<sup class="small">%</sup></div>
                    </div>
                  </div>
                  <!-- END -->
                </div>
              </div>

              <div class="col-lg-4 mb-4">

                <div class="bg-white rounded-lg shadow p-4">
                  <h2 class="h5 font-weight-bold text-center mb-4">Nama Kerusakan</h2>

                  <!-- Progress bar 1 -->
                  <div class="progress mx-auto" data-value='75'>
                    <span class="progress-left">
                      <span class="progress-bar border-primary"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar border-primary"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                      <div class="h2 font-weight-bold">XX<sup class="small">%</sup></div>
                    </div>
                  </div>
                  <!-- END -->
                </div>
              </div>
            </div>

            <div class="row">
              <h4>Berdasarkan Gejala-Gejala yang telah dipilih,maka komputer anda mengalami:</h4>
              <br>
              <div class="col-md animate-box">


                <center>
                  <h2><b>Kerusakan Tertinggi</b></h2>
                </center>


              </div>
            </div>
            <br>

            <div class="row d-flex center">
              <div class="col-md-8 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                  <a href="single.html" class="block-20" style="background-image: url('<?= base_url('assetshasil/'); ?>images/image_1.jpg');">
                  </a>
                  <div class="text mt-3 float-right d-block">
                    <h4>Solusi</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis cum quasi atque architecto ipsum delectus fugit quam nostrum illum aspernatur! Adipisci at in, sunt hic nihil eligendi similique ipsum repudiandae!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>