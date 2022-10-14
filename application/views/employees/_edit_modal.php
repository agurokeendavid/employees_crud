<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="edit_form" role="form" method="post">
				<input type="hidden" id="edit_id" name="edit_id" readonly>
				<div class="modal-header">
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="edit_name">Name <span class="text-danger">Required</span></label>
						<input type="text" class="form-control" id="edit_name" name="edit_name" required autofocus>
					</div>
					<div class="form-group">
						<label for="edit_position">Position <span class="text-danger">Required</span></label>
						<input id="edit_position" name="edit_position" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="edit_employee_no">Employee No. <span class="text-danger">Required</span></label>
						<input id="edit_employee_no" name="edit_employee_no" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="edit_dob">Birthday (dd/mm/yyyy)<span class="text-danger">Required</span></label>
						<input id="edit_dob" name="edit_dob" type="date" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="edit_sss">SSS</label>
						<input id="edit_sss" name="edit_sss" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_philhealth">Philhealth</label>
						<input id="edit_philhealth" name="edit_philhealth" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_hdmf">HDMF</label>
						<input id="edit_hdmf" name="edit_hdmf" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_tin">TIN</label>
						<input id="edit_tin" name="edit_tin" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_contact_person">Contact Person</label>
						<input id="edit_contact_person" name="edit_contact_person" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_address">Address</label>
						<input id="edit_address" name="edit_address" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_contact_no">Contact Number</label>
						<input id="edit_contact_no" name="edit_contact_no" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="edit_photo_image">Photo Image</label>
						<input type="file" name="edit_photo_image" id="edit_photo_image" class="form-control-file">
					</div>
					<div class="form-group">
						<label for="edit_signature_image">Signature Image</label>
						<input type="file" name="edit_signature_image" id="edit_signature_image" class="form-control-file">
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Update">
				</div>
			</form>
		</div>
	</div>
</div>
