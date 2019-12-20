<div class="section section-features">
  <div class="container">
    <h4 class="header-text text-center">Pilih Gejala</h4>
    <div class="row">
      <form action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
        <div class="boxes">
          <table>
            <?php foreach ($gejala as $g) : ?>
              <tr>
                <td>
                  <input type="checkbox" id="<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>">
                </td>
                <td colspan="2">
                  <?= $g['kode_gejala']; ?> | Apakah <?= $g['nama_gejala']; ?> ?
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
          <center>
            <button type="submit">Simpan</button>
          </center>
        </div>
      </form>
    </div>
  </div>
</div>