      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Laporan</h3>
            </div>

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= $tabel; ?></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="row mt-3">

                  </div>

                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 3px; text-align: center;">No</th>
                        <th style="text-align: center;">Tanggal</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Kerusakan</th>
                        <th style="text-align: center;">Probabilitas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($laporan as $l) : ?>
                        <tr>
                          <td style="text-align: center"><?= $i; ?></td>
                          <td style="text-align: center"><?= date('d F Y', $l['waktu']); ?></td>
                          <td><?= $l['nama_user']; ?></td>
                          <td><?= $l['nama_kerusakan']; ?></td>
                          <td><?= $l['hasil_probabilitas']; ?></td>

                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- /page content -->