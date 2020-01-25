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
          <li class="nav-item"><a href="#" class="nav-link"><span><?= $user['nama_user']; ?></span></a></li>
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
              <?php foreach ($diagnosa as $diag) : ?>
                <?php
                if ($diag['id_kerusakan'] == 1) {
                  $diag['id_kerusakan'] = 'Rusak Pada IC Power';
                } elseif ($diag['id_kerusakan'] == 2) {
                  $diag['id_kerusakan'] = 'Rusak Pada IC VGA';
                } elseif ($diag['id_kerusakan'] == 3) {
                  $diag['id_kerusakan'] = 'Rusak pada Inverter/gangguan pada fleksibel kabel';
                } elseif ($diag['id_kerusakan'] == 4) {
                  $diag['id_kerusakan'] = 'Rusak pada LCD';
                } elseif ($diag['id_kerusakan'] == 5) {
                  $diag['id_kerusakan'] = 'Rusak pada Keyboard';
                }

                ?>
                <div class="col-lg-4 mb-4">
                  <div class="bg-white rounded-lg shadow p-2">
                    <h2 class="h5 text-center mb-4"><?= $diag['id_kerusakan']; ?></h2>
                    <!-- Progress bar -->
                    <div class="progress mx-auto" data-value='<?= $diag['hasil_probabilitas'] * 100; ?>'>
                      <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold"><?= $diag['hasil_probabilitas'] * 100; ?><sup class="small">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                  </div>
                </div>
              <?php endforeach; ?>
            </div>



            <div class="row">
              <h4>Berdasarkan Gejala-Gejala yang telah dipilih,maka komputer anda mengalami:</h4>
              <br>
              <?php foreach ($tertinggi as $tinggi) : ?>
                <?php
                if ($tinggi['id_kerusakan'] == 1) {
                  $tinggi['id_kerusakan'] = 'Rusak Pada IC Power';
                } elseif ($tinggi['id_kerusakan'] == 2) {
                  $tinggi['id_kerusakan'] = 'Rusak Pada IC VGA';
                } elseif ($tinggi['id_kerusakan'] == 3) {
                  $tinggi['id_kerusakan'] = 'Rusak pada Inverter/gangguan pada fleksibel kabel';
                } elseif ($tinggi['id_kerusakan'] == 4) {
                  $tinggi['id_kerusakan'] = 'Rusak pada LCD';
                } elseif ($tinggi['id_kerusakan'] == 5) {
                  $tinggi['id_kerusakan'] = 'Rusak pada Keyboard';
                }

                ?>
                <div class="col-md-5 animate-box">
                  <center>
                    <h2><b><?= $tinggi['id_kerusakan']; ?></b></h2>
                  </center>
                </div>
              <?php endforeach; ?>
            </div>
            <br>

            <?php foreach ($detail as $det) : ?>
              <div class="row d-flex center">
                <div class="col-md-8 d-flex ftco-animate">
                  <div class="blog-entry justify-content-end">
                    <a href="#" class="block-20" style="background-image: url('<?= base_url('assets/images/kerusakan/'); ?><?= $det['gambar']; ?>');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                      <h4>Solusi</h4>
                      <p><?= $det['solusi']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>