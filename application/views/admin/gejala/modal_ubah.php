<?php foreach ($gejala as $gjl) : ?>
    <div class="modal fade ubah<?= $gjl['id_gejala']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel2">Ubah Data Gejala</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('gejala/ubah'); ?>" method="post">
                        <input type="hidden" name="id_gejala" value="<?= $gjl['id_gejala']; ?>">
                        <div class="form-group">
                            <label for="kode">Kode Gejala</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $gjl['kode_gejala']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Gejala</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $gjl['nama_gejala']; ?>">
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