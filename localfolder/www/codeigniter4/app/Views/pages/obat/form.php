<?php echo $this->section('modalButton');?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticTambahObat">
  Tambah Obat
</button>
<?php echo $this->endSection();?>

<?php echo $this->section('modalForm');?>

<?php echo $this->include('pages/obat/innerform');?>

<!-- Modal -->
<div class="modal fade" id="staticTambahObat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticTambahObatLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticTambahObatLabel">Tambah Obat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <?php echo $this->renderSection('innerForm');?>

      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection();?>