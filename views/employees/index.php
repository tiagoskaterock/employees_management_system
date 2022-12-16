<div class="table-responsive">
  <table class="table">
  <caption>Employees</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Job</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($employees as $employee): ?>
	    <tr>
	      <th scope="row"><?php echo $employee['id'] ?></th>
	      <td><?php echo $employee['name'] ?></td>
	      <td><?php echo $employee['job'] ?></td>
	      <td>$ <?php echo $employee['salary'] ?></td>
	    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>