<?php echo $this->extend('coreview');?>

<?php echo $this->section('content');?>
<?php echo $this->include('pages/alkes/form');?>

<div class="app-content pt-3 p-md-3 p-ld-4">

  <div class="container-xl"> 
			    
    <div class="row g-3 mb-4 align-items-center justify-content-between">
      <div class="col-auto">
            <h1 class="app-page-title mb-0"><?php echo $titleContent ?? ''; ?></h1>
      </div>
      <div class="col-auto">
        <div class="page-utilities">
          <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
            <div class="col-auto">
              <?php echo $this->renderSection('modalButton');?>
            </div>
          </div><!--//row-->
        </div><!--//table-utilities-->
      </div><!--//col-auto-->
    </div><!--//row-->
				
    <div class="tab-content" id="orders-table-tab-content">

      <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
          <div class="app-card-body">
            <div class="table-responsive">
              <table class="table app-table-hover mb-0 text-left">
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Dibuat</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
              <?php 
              foreach($data as $key => $item): ?>
                <tr>
                    <td><?=$item['kode_alkes']?></td>
                    <td><?=$item['nama_alkes']?></td>
                    <td><?=$item['stok_alkes']?></td>
                    <td><?=$item['keterangan']?></td>
                    <td><?=$item['status']?></td>
                    <td><?=$item['created_at']?></td>
                    <td>
                      <a href="<?=base_url('/pages/alkes/delete/'.$item['id'])?>" class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin, ingin menghapus data ini?')" href="">HAPUS</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div><!--//table-responsive-->  
          </div><!--//app-card-body-->		
        </div><!--//app-card-->
        
      </div><!--//tab-pane-->
          
    </div><!--//tab-content-->

    <?php echo $this->renderSection('modalForm');?>
			    
  </div>

</div>

<?php echo $this->endSection();?>