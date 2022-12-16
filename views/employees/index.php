<a href="/employee/form" class="btn btn-primary" title="New Employee">
	<i class="fas fa-plus"></i>
	New
</a>

<div class="table-responsive">
  <table class="table">
  <caption>Employees</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Job</th>
      <th scope="col">Salary</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($employees as $employee): ?>
	    <tr>
			<th scope="row"><?php echo $employee['id'] ?></th>
			<td><?php echo $employee['name'] ?></td>
			<td><?php echo $employee['job'] ?></td>
			<td>$ <?php echo $employee['salary'] ?></td>
			<td>
				<a href="/employee/form?id=<?= $employee['id'] ?>" class="btn btn-sm btn-primary" title="Edit <?= $employee['name'] ?>">
					<i class="fas fa-edit"></i>
				</a>
			</td>
	    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>