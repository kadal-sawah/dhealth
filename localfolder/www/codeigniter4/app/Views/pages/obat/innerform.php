<?php echo $this->section('innerForm');?>

<form class="settings-form">
  <div class="mb-2">
    <label for="kodeObat" class="form-label">Kode Obat</label>
      <input type="text" class="form-control" id="kodeObat" name="kodeObat" placeholder="contoh : ALK00000614" required>
  </div>
  <div class="mb-2">
      <label for="setting-input-2" class="form-label">Nama Obat</label>
      <input type="text" class="form-control" id="setting-input-2" name="namaObat" placeholder="contoh : KASSA NON-XRAY 10 CM X 10 CM" required>
  </div>
  <div class="mb-2">
      <label for="setting-input-2" class="form-label">Stok</label>
      <input type="number" class="form-control" id="setting-input-2" min="0" value="0">
  </div>
  <div class="mb-2">
      <label for="setting-input-2" class="form-label">Keterangan Tambahan</label>
      <input type="text" class="form-control" id="setting-input-2" required>
  </div>
  <button type="submit" class="btn app-btn-primary mt-2">Simpan</button>
</form>

<?php echo $this->endSection();?>