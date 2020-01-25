      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Dashboard</h3>
            </div>

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Halaman Admin</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <a href="<?= base_url('gejala'); ?>">
                          <div class="icon"><i class="fa fa-edit"></i>
                          </div>
                          <div class="count"><?= $totalGejala; ?></div>
                          <h3>Gejala</h3>
                        </a>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <a href="<?= base_url('kerusakan'); ?>">
                          <div class="icon"><i class="fa fa-desktop"></i></div>
                          <div class="count"><?= $totalKerusakan; ?></div>
                          <h3>Kerusakan</h3>
                        </a>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <a href="<?= base_url('pengetahuan'); ?>">
                          <div class="icon"><i class="fa fa-table"></i></div>
                          <div class="count"><?= $totalPengetahuan; ?></div>
                          <h3>Aturan</h3>
                        </a>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-bar-chart-o"></i></div>
                        <div class="count"><?= $totalLaporan; ?></div>
                        <h3>Laporan</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->