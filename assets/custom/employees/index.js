$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});

	const addFormEl = $('#add_form');

	addFormEl.on('submit', function(e) {
		e.preventDefault();
		if (!addFormEl.valid()) return;
		// let id = $('#id').val();
		$.ajax({
			url: `${base_url}employees/form`,
			type: 'POST',
			async: true,
			data: $(this).serialize(),
			dataType: 'json',
			beforeSend: function () {
				AmagiLoader.show();
			},
			success: function (result) {
				alert(result.message);
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
