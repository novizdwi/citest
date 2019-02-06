<?php 
    $this->load->view('fragments/top'); 
    $this->load->view('fragments/right'); 
?>

<div class="card">
	<div class="card-header w3-top w3-white">
	  <i class="fas fa-database"></i>&nbsp;
	   <?= $viewBag['title']; ?>
	   <br>
		<a class="w3-button btn-primary" href="<?= site_url('employee/add' ); ?>"><i class="fas fa-plus-square"> Add New Record</i></a>
		
	</div>

	<div class="card-body w3-padding-64">
		
		<!-- data table -->
					<?php $this->load->view($viewBag['viewPath'] . '/_table'); ?>

		<!-- /data-table -->
	</div>
</div>

<div class="row">
	<div class="col-sm-12">&nbsp;</div>
</div>


</div>
 
<?php 
    $this->load->view('fragments/bottom'); 
?>

