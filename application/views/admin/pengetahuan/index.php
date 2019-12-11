      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Pengetahuan</h3>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
                <a href="" class="btn btn-round btn-primary mb-3 pull-right" data-toggle="modal" data-target="#tambahPengetahuan">Tambah Data Pengetahuan</a>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <!-- Tabel satu -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Tabel Kerusakan</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <?= $this->session->flashdata('pesan'); ?>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 3px; text-align: center;">No</th>
                        <th style="text-align: center;">Nama Kerusakan</th>
                        <th style="text-align: center;">Nama Gejala</th>
                        <th style="text-align: center;">Probabilitas</th>
                        <th style="width: 100px; text-align: center;">Kelola</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($pengetahuan as $P) : ?>
                        <tr>
                          <td style="text-align: center"><?= $i; ?></td>
                          <td><?= $P['kode_kerusakan']; ?> - <?= $P['nama_kerusakan']; ?></td>
                          <td><?= $P['kode_gejala']; ?> - <?= $P['nama_gejala']; ?></td>
                          <td><?= $P['probabilitas']; ?></td>
                          <td style="text-align: center;">
                            <a href="<?= base_url('pengetahuan/hapus/') . $P['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus');">Hapus</a>
                            <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".ubahPengetahuan<?= $P['id']; ?>">Ubah</a>
                          </td>
                        </tr>
                        <?php $i++; ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Tabel satu -->
          </div>
        </div>
      </div>
      <!-- /page content -->