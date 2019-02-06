<div class="wrapper ">

	<nav id="sidebar">

    <div class="sidebar-header w3-center">
    	<h2>Menu</h2>
    </div>
    <ul class="list-unstyled components">
       	<li>
       	<a href="<?= base_url('/dashboard'); ?>"><i class="fas fa-home"></i> Home</a>
       	</li>
        
        <li>
        	<a href="#empSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Employee</a>
				<ul class="collapse list-unstyled" id="empSubmenu">
            		<li><a href="<?= base_url('/employee'); ?>">Employees</a></li>
					<li><a href="#">Titles</a></li>
					<li><a href="#">Salaries</a></li>
				</ul>
		</li>
		<li>
			<a href="#deptSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-building"></i> Departments</a>
				<ul class="collapse list-unstyled" id="deptSubmenu">
                <li><a href="#">Departments</a></li>
                <li><a href="#">Dept Managers</a></li>
                <li><a href="#">Dept Employees</a></li>
                </ul>
		</li>
			<hr />
	<li><a href="#"><i class="fas fa-user-lock"></i> User Management</a></li>
	<li><a href="<?= base_url('/logout'); ?>"><i class="fas fa-door-open"></i> Logout</a></li>
	</ul>


	</nav>
  
        <!-- Page Content  -->
        <div id="content">    

