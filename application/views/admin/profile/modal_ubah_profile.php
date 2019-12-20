<!-- Modal Edit -->

<div class="modal fade" id="ubahProfile<?= $user['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="forModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="apasih">Ubah Profile</h5>
      </div>

      <?= form_open_multipart('admin/ubahAdmin'); ?>
      <input type="hidden" name="id_admin" value="<?= $user['id_admin']; ?>">
      <div class="modal-body">
      </div>
      <div class="form-group">
        <label for="nama">Nama Admin</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama_user']; ?>">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
      </div>
      <div class="form-group">
        <label for="gambar">Gambar Profile</label>
        <img style="margin-bottom: 10px; width: 100px;" src=" <?= base_url('assets/images/') . $user['image']; ?>">
        <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $user['image']; ?>"><?= $user['image']; ?>"
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