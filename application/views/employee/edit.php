<?php $this->load->view('fragments/top'); ?>

<form action="<?= base_url('employee/update/'.$Models->emp_no); ?>" method="post">
		<table class="table table-borderless ">
            <tr>
				<td>Employee No</td>
				<td><input type="text" name="first_name" disabled value="<?= $Models->emp_no;?>"></td>
            </tr>
            <tr>
				<td>First Name</td>
				<td><input type="text" name="first_name" value="<?= $Models->first_name;?>" required></td>
            </tr>
            <tr>
				<td>Last Name</td>
				<td><input type="text" name="last_name" value="<?= $Models->last_name;?>" required></td>
			</tr>
            <tr>
				<td>Birth Date</td>
				<td><input type="date" name="birth_date" value="<?= $Models->birth_date;?>" required></td>
			</tr>
            <tr>
                <td>Gender</td>
                <td>
                <div class="radio">
                    <?php if ($Models->gender === 'M') {?>
                        <label><input type="radio" name="gender" value="M" required checked> Male</label>
                        <label><input type="radio" name="gender" value="F"> Female</label>
                    <?php } 
                    else{ ?>
                        <label><input type="radio" name="gender" value="M" required> Male</label>
                        <label><input type="radio" name="gender" value="F"  checked> Female</label>
                    <?php } ?>
                </td>
                </div>
			</tr>
			<tr>
				<td>Hire Date</td>
				<td><input type="date" name="hire_date" value="<?= $Models->hire_date;?>" required></td>
			</tr>
			<tr>
				<td></td>
                <td>
                <button type="submit" class="btn btn-primary">Submit</button>
                </td>
			</tr>
		</table>
	</form>	