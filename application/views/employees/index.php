</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#add_employee_modal" class="btn btn-success" data-toggle="modal"><i
									class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
					</div>
				</div>
			</div>
			<table id="table_employees" class="table table-striped table-hover">
				<thead>
				<tr>
					<th>ID</th>
					<th>Employee No.</th>
					<th>Position</th>
					<th>Name</th>
					<th>Date of Birth</th>
					<th>Address</th>
					<th>Actions</th>
				</tr>
				</thead>
				<tbody>
				<?php if (!empty($employees)) : ?>
					<?php foreach ($employees as $employee) : ?>
						<tr>
							<td><?= (!empty($employee['id'])) ? $employee['id'] : 'N/A'; ?></td>
							<td><?= (!empty($employee['employee_no'])) ? $employee['employee_no'] : 'N/A'; ?></td>
							<td><?= (!empty($employee['position'])) ? $employee['position'] : 'N/A'; ?></td>
							<td><?= (!empty($employee['name'])) ? $employee['name'] : 'N/A'; ?></td>
							<td><?= (!empty($employee['dob'])) ? view_date($employee['dob']) : 'N/A'; ?></td>
							<td><?= (!empty($employee['address'])) ? $employee['address'] : 'N/A'; ?></td>
							<td>
								<a href="javascript:void(0);" class="edit" data-id="<?= $employee['id']; ?>"><i class="material-icons"
																								 data-toggle="tooltip"
																								 title="Edit">&#xE254;</i></a>
								<a href="javascript:void(0);" class="delete" data-id="<?= $employee['id']; ?>"><i
											class="material-icons" title="Delete">&#xE872;</i></a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view('employees/_add_modal') ?>
<?php $this->load->view('employees/_edit_modal') ?>

</body>
</html>
