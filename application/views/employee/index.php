<?php $this->load->view('fragments/top'); ?>

<div class="card">
	<div class="card-header">
	  <i class="fas fa-database"></i>&nbsp;
	   <?= $viewBag['title']; ?>
	</div>
	<a class="btn btn-primary" href="<?= site_url('/logout' ); ?>">Logout</a>
	<a class="btn btn-primary" href="<?= site_url('employee/add' ); ?>">Add new Record</a>
	<div class="card-body">
		
		<!-- data table -->
					<?php $this->load->view($viewBag['viewPath'] . '/_table'); ?>

		<!-- /data-table -->
	</div>
</div>

<div class="row">
	<div class="col-sm-12">&nbsp;</div>
</div>

<div class="card">
	<div class="card-header">
	  <i class="fas fa-database"></i>&nbsp;
	  
	</div>

</div>
