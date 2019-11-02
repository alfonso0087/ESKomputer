<div class="modal fade tambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Masukkan Data Gejala</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('gejala/tambah'); ?>" method="post">
                    <div class="form-group">
                        <label for="kode">Kode Gejala</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Gejala</label>
                        <input type="text" class="form-control" id="nama" name="nama">
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