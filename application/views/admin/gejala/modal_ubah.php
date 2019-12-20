<?php foreach ($gejala as $gjl) : ?>
  <div class="modal fade ubahGejala<?= $gjl['id_gejala']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel2">Ubah Data Gejala</h4>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('gejala/ubah'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $gjl['id_gejala']; ?>">
            <div class="form-group">
              <label for="kode">Kode Gejala</label>
              <input type="text" class="form-control" id="kode" name="kode" value="<?= $gjl['kode_gejala']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama">Nama Gejala</label>
              <textarea id="nama" class="form-control" name="nama"><?= $gjl['nama_gejala']; ?></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

        </form>
      </div>
    </div>
  </div>

<?php endforeach; ?>