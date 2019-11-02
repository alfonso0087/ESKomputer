      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Halaman Gejala</h3>
            </div>

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Daftar Gejala</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="row mt-3">
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".tambah">Tambah Data Gejala</button>
                    </div>
                  </div>
                  <?= $this->session->flashdata('pesan'); ?>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Kode Gejala</th>
                        <th>Nama Gejala</th>
                        <th style="width: 20px;">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($gejala as $gjl) : ?>
                        <tr>

                          <td><?= $i; ?></td>
                          <td><?= $gjl['kode_gejala']; ?></td>
                          <td><?= $gjl['nama_gejala']; ?></td>
                          <td>
                            <a href="<?= base_url('gejala/hapus/') . $gjl['id_gejala']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus');">Hapus</a>
                            <a href="<?= base_url('gejala/modal_ubah/') . $gjl['id_gejala']; ?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".ubah<?= $gjl['id_gejala']; ?>">Ubah</a>
                          </td>
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