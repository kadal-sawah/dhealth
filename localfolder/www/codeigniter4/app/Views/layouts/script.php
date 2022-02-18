<!-- Javascript -->          
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script src="<?php echo base_url('assets/plugins/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>  

<!-- Charts JS -->
<!-- <script src="<?php //echo base_url('assets/plugins/chart.js/chart.min.js');?>"></script> 
<script src="<?php //echo base_url('assets/js/index-charts.js');?>"></script>  -->

<!-- Page Specific JS -->
<script src="<?php echo base_url('assets/js/app.js');?>"></script> 

<script>	
$(document).ready(function() {
    $('.table').DataTable();
});
</script>