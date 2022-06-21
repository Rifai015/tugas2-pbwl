<h3>
      Edit Data Pelanggan
</h3>

<form action="<?php echo URL; ?>/pelanggan/update" method="POST">
      <input type="hidden" name="pel_id" value="<?php echo $data['row']['pel_id']; ?>">
      <div class="mb-3">
            <label class="form-label">No Pelanggan</label>
            <input type="text" class="form-control" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required>
      </div>
      <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>">
      </div>
      <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>">
      </div>
      <div class="mb-3">
            <label class="form-label">Hp</label>
            <input type="text" class="form-control" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>">
      </div>
      <div class="mb-3">
            <label class="form-label">Ktp</label>
            <input type="text" class="form-control" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>">
      </div>
      <div class="mb-3">
            <label class="form-label">Seri</label>
            <input type="text" class="form-control" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>">
      </div>
      <div class="mb-3">
            <label class="form-label">Meteran</label>
            <input type="text" class="form-control" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>">
      </div>
      <div class="mb-3">
            <label class="form-label">Aktif</label>
            <br>
            <input type="radio" name="pel_aktif" value = "Y">YA
            <input type="radio" name="pel_aktif" value = "N">TIDAK
      </div>
      </div>
      <button type="submit" class="btn btn-success" name="btn_update">Update</button>
      <a href="<?php echo URL; ?>/pelanggan/index" class="btn btn-primary">Kembali</a>
</form>