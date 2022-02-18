<?php echo $this->extend('coreview');?>

<?php echo $this->section('content');?>
<?php echo $this->include('pages/obat/form');?>

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
                    <th class="cell">Order</th>
                    <th class="cell">Product</th>
                    <th class="cell">Customer</th>
                    <th class="cell">Date</th>
                    <th class="cell">Status</th>
                    <th class="cell">Total</th>
                    <th class="cell"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="cell">#15346</td>
                    <td class="cell"><span class="truncate">Lorem ipsum dolor sit amet eget volutpat erat</span></td>
                    <td class="cell">John Sanders</td>
                    <td class="cell"><span>17 Oct</span><span class="note">2:16 PM</span></td>
                    <td class="cell"><span class="badge bg-success">Paid</span></td>
                    <td class="cell">$259.35</td>
                    <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a></td>
                  </tr>
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