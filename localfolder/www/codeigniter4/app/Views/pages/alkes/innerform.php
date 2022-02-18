<?php echo $this->section('innerForm');?>

<form class="settings-form" method="POST" action="<?=base_url('pages/alkes/store')?>">
  <div class="mb-2">
    <label for="kodeAlkes" class="form-label">Kode Alkes</label>
      <input type="text" class="form-control" id="kodeAlkes" name="kode_alkes" placeholder="contoh : ALK00000614" required>
  </div>
  <div class="mb-2">
      <label for="setting-input-2" class="form-label">Nama Alkes</label>
      <input type="text" class="form-control" id="setting-input-2" name="nama_alkes" placeholder="contoh : KASSA NON-XRAY 10 CM X 10 CM" required>
  </div>
  <div class="mb-2">
      <label for="setting-input-2" class="form-label">Stok</label>
      <input type="number" class="form-control" id="setting-input-2" name="stok_alkes" min="0" value="0">
  </div>
  <div class="mb-2">
      <label for="setting-input-2" class="form-label">Keterangan Tambahan</label>
      <input type="text" class="form-control" id="setting-input-2" name="keterangan" required>
  </div>
  <button type="submit" class="btn app-btn-primary mt-2">Simpan</button>
</form>

<?php echo $this->endSection();?>