$(function() {
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	const addFormEl = $('#add_form');
	const editFormEl = $('#edit_form');
	const tableEmployeesEl = $('#table_employees');

	editFormEl.on('submit', function(e) {
		e.preventDefault();
		$.ajax({
			url: `${base_url}employees/form`,
			type: 'POST',
			async: true,
			data: new FormData(this),
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function () {
				AmagiLoader.show();
			},
			success: function (result) {
				alert(result.message);
				location.reload();
			},
			error: function (result) {
				console.log(result);
				alert('Error has been occurred, Please try again later.');
			},
			complete: function () {
				AmagiLoader.hide();
			}
		});
	});

	$('.edit').on('click', function(e) {
		e.preventDefault();
		$.ajax({
			url: `${base_url}employees/get/${$(this).data('id')}`,
			type: 'GET',
			async: true,
			dataType: 'json',
			beforeSend: function () {
				AmagiLoader.show();
			},
			success: function (response) {
				$('#edit_id').val(response.id);
				$('#edit_name').val(response.name);
				$('#edit_position').val(response.position);
				$('#edit_employee_no').val(response.employee_no);
				$('#edit_dob').val(response.dob);
				$('#edit_sss').val(response.sss);
				$('#edit_philhealth').val(response.philhealth);
				$('#edit_hdmf').val(response.hdmf);
				$('#edit_tin').val(response.tin);
				$('#edit_contact_person').val(response.contact_person);
				$('#edit_address').val(response.address);
				$('#edit_contact_no').val(response.contact_no);
			},
			error: function (result) {
				console.log(result);
				alert('Error has been occurred, Please try again later.');
			},
			complete: function () {
				AmagiLoader.hide();
			}
		});
		$('#editEmployeeModal').modal('toggle');
	});

	tableEmployeesEl.dataTable({
		pageLength: 10,
		searchDelay: 500
	});

	$('.delete').on('click', function(e) {
		e.preventDefault();
		if (confirm('Are you sure you want to delete this record?')) {
			$.ajax({
				url: `${base_url}employees/delete`,
				type: 'POST',
				async: true,
				dataType: 'json',
				data: { id: $(this).data('id') },
				beforeSend: function () {
					AmagiLoader.show();
				},
				success: function (response) {
					alert(response.message);
					location.reload();
				},
				error: function (result) {
					console.log(result);
					alert('Error has been occurred, Please try again later.');
				},
				complete: function () {
					AmagiLoader.hide();
				}
			});
		}
	});

	addFormEl.on('submit', function(e) {
		e.preventDefault();
		if (!addFormEl.valid()) return;
		$.ajax({
			url: `${base_url}employees/form`,
			type: 'POST',
			async: true,
			data: new FormData(this),
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function () {
				AmagiLoader.show();
			},
			success: function (result) {
				alert(result.message);
				location.reload();
			},
			error: function (result) {
				console.log(result);
				alert('Error has been occurred, Please try again later.');
			},
			complete: function () {
				AmagiLoader.hide();
			}
		});
	});
});
