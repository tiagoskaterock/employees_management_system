<?php foreach ($employees as $employee): ?>
	<h1>ID: <?php echo $employee['id'] ?></h1>
	<h1>Name: <?php echo $employee['name'] ?></h1>
	<h1>Job: <?php echo $employee['job'] ?></h1>
	<h1>Salary: $ <?php echo $employee['salary'] ?></h1>
	<hr>
<?php endforeach ?>