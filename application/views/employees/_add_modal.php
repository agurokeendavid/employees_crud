<!-- Edit Modal HTML -->
<div id="add_employee_modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="add_form" role="form" method="post">
				<div class="modal-header">
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="add_name">Name <span class="text-danger">Required</span></label>
						<input type="text" class="form-control" id="add_name" name="add_name" required autofocus>
					</div>
					<div class="form-group">
						<label for="add_position">Position <span class="text-danger">Required</span></label>
						<input id="add_position" name="add_position" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="add_employee_no">Employee No. <span class="text-danger">Required</span></label>
						<input id="add_employee_no" name="add_employee_no" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="add_dob">Birthday (dd/mm/yyyy)<span class="text-danger">Required</span></label>
						<input id="add_dob" name="add_dob" type="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="add_sss">SSS</label>
						<input id="add_sss" name="add_sss" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="add_philhealth">Philhealth</label>
						<input id="add_philhealth" name="add_philhealth" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="add_hdmf">HDMF</label>
						<input id="add_hdmf" name="add_hdmf" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="add_tin">TIN</label>
						<input id="add_tin" name="add_tin" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="add_contact_person">Contact Person</label>
						<input id="add_contact_person" name="add_contact_person" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="add_address">Address</label>
						<input id="add_address" name="add_address" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="add_contact_no">Contact Number</label>
						<input id="add_contact_no" name="add_contact_no" type="text" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
