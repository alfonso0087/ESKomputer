<!-- Modal Edit -->
<?php foreach ($pengetahuan as $P) : ?>
  <div class="modal fade ubahPengetahuan<?= $P['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="apasih">Ubah Pengetahuan</h5>
        </div>

        <?= form_open_multipart('pengetahuan/ubah'); ?>
        <input type="hidden" name="id" value="<?= $P['id']; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="kerusakan">Pilih Kerusakan</label>
            <select name="kerusakan" id="kerusakan" class="form-control">
              <option value="<?= $P['kode_kerusakan']; ?>" selected><?= $P['kode_kerusakan']; ?> - <?= $P['nama_kerusakan']; ?></option>
              <?php foreach ($kerusakan as $k) : ?>
                <option value="<?= $k['id_kerusakan']; ?>"><?= $k['kode_kerusakan']; ?>-<?= $k['nama_kerusakan']; ?></option>
              <?php endforeach; ?>
            </select>
            <label for="gejala">Pilih Gejala</label>
            <select name="gejala" id="gejala" class="form-control">
              <option value="<?= $P['kode_gejala']; ?>"><?= $P['kode_gejala']; ?>-<?= $P['nama_gejala']; ?></option>
              <?php foreach ($gejala as $g) : ?>
                <option value="<?= $g['id_gejala']; ?>"><?= $g['kode_gejala']; ?> - <?= $g['nama_gejala']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="probabilitas">Nilai Probabilitas</label>
              <input type="text" class="form-control" id="probabilitas" name="probabilitas" value="<?= $P['probabilitas']; ?>">
            </div>
          </div>
          <div class="form-group">
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