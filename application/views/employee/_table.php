
<div class="table-responsive ">
  <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Employee No</th>
        <th>Birth Date</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Hire Date</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($Models) > 0): ?>
        <?php $i=0; ?>
        <?php foreach ($Models as $Model): ?>
          <tr>
            <td><?= $i=$i+1;; ?></td>
            <td><?= $Model->emp_no; ?></td>
            <td><?= $Model->birth_date; ?></td>
            <td><?= $Model->first_name; ?></td>
            <td><?= $Model->last_name; ?></td>
            <td><?= ($Model->gender=='M')?"Male":"Female"; ?></td>
            <td><?= $Model->hire_date; ?></td>
            <td class="text-center">
            <form action="<?= base_url('employee/delete/'. $Model->emp_no); ?>" method="post">
              <a class="btn btn-primary" href="<?= base_url('employee' . '/edit/' . $Model->emp_no); ?>"data-toggle="tooltip" data-placement="bottom" title="Edit Record"><i class="fas fa-edit"></i></a>
              <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Delete Record"><i class="fas fa-trash"></i></button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

