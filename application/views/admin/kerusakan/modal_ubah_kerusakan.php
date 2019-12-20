<!-- Modal Edit -->
<?php foreach ($tbl_kerusakan as $rusak) : ?>
  <div class="modal fade ubahKerusakan<?= $rusak['id_kerusakan']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Ubah Kerusakan</h5>
        </div>

        <?= form_open_multipart('kerusakan/ubahKerusakan'); ?>
        <input type="hidden" name="id" value="<?= $rusak['id_kerusakan']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="kode">Kode Kerusakan</label>
            <input type="text" class="form-control" id="kode" name="kode" value="<?= $rusak['kode_kerusakan']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nama">Nama Kerusakan</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $rusak['nama_kerusakan']; ?>">
          </div>
          <div class="form-group">
            <label for="probabilitas">Nilai Probabilitas</label>
            <input type="text" class="form-control" id="probabilitas" name="probabilitas" value="<?= $rusak['probabilitas']; ?>">
          </div>
          <div class="form-group">
            <label for="gambar">Gambar Hardware</label>
            <img style="margin-bottom: 10px; width: 100px;" src=" <?= base_url('assets/images/kerusakan/') . $rusak['gambar']; ?>">
            <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $rusak['gambar']; ?>"><?= $rusak['gambar']; ?>"
          </div>
          <div class="form-group">
            <label for="solusi">Solusi</label>
            <textarea id="solusi" class="form-control" name="solusi"><?= $rusak['solusi']; ?></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-round btn-primary">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>