<?php $this->load->view('fragments/top'); ?>

<form action="<?= base_url('employee/insert'); ?>" method="post">
		<table class="table table-borderless ">
            <tr>
				<td>First Name</td>
				<td><input type="text" name="first_name" required></td>
            </tr>
            <tr>
				<td>Last Name</td>
				<td><input type="text" name="last_name"required></td>
			</tr>
            <tr>
				<td>Birth Date</td>
				<td><input type="date" name="birth_date"required></td>
			</tr>
            <tr>
                <td>Gender</td>
                <td>
                <div class="radio">
                    <label><input type="radio" name="gender" value="M" required> Male</label>
                    <label><input type="radio" name="gender" value="F"> Female</label>
                </td>
                </div>
			</tr>
			<tr>
				<td>Hire Date</td>
				<td><input type="date" name="hire_date"required></td>
			</tr>
			<tr>
				<td></td>
                <td>
                <button type="submit" class="btn btn-primary">Submit</button>
                </td>
			</tr>
		</table>
	</form>	