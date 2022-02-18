<!DOCTYPE html>
<html lang="en"> 
<head>

  <?php echo $this->include('layouts/header');?>

</head> 

<body class="app">   	

  <header class="app-header fixed-top">

    <?php echo $this->include('layouts/navbar');?>

      <?php echo $this->include('layouts/sidebar');?>
    
  </header><!--//app-header-->
    
  <div class="app-wrapper">

    <?php echo $this->renderSection('content');?>
    
    <?php echo $this->include('layouts/footer');?>
    
  </div><!--//app-wrapper-->    					
  
  <?php echo $this->include('layouts/script');?>

</body>
</html> 

