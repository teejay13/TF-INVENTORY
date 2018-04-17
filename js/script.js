$(document).ready(function () {

	$('#withdrawLaptopModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var tf_id = button.data('whatever')
		var url = './php_action/getlaptop.php' + '?tf_id=' + tf_id
		var modal = $(this);

		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (data) {
				$('#tf_id_withdraw').val(data.tf_id);
			}
		});
	});


	$('#withdrawlaptopform').on('submit', function (event) {
		event.preventDefault();
		var data = $('#withdrawlaptopform').serialize();
		var url = './php_action/withdrawlaptop.php';
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'POST',
			data: data,
			beforeSend: function () {
				$('#submit').val("Updating");
			},
			success: function (data) {
				if (data.error != 'true') {
					$('#withdrawlaptopform')[0].reset();
					$('#withdrawLaptopModal').modal('hide');
					window.location.reload();
				} else {
					$('#withdrawlaptopform')[0].reset();
					$('#withdrawLaptopModal').modal('hide');
					window.location.reload();
				}

			}
		});
	});


	$('#editprinterModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var recipient = button.data('whatever')
		var url = './php_action/getprinter.php' + '?printer_id=' + recipient;
		var modal = $(this);
		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (data) {
				$('#p_id').val(data.printer_id);
				$('#printertf_id').val(data.tf_id);
				$('#printer_name').val(data.printer_name);
				$('#printer_nickname').val(data.printer_nickname);
				$('#printer_model').val(data.printer_model);
				$('#printer_type').val(data.printer_type);
			}
		});
	});

	$('#editlaptopform').on('submit', function (event) {
		event.preventDefault();
		var data = $('#editlaptopform').serialize();
		var url = './php_action/editlaptop.php';

		$.ajax({
			url: url,
			dataType: 'json',
			type: 'POST',
			data: data,
			beforeSend: function () {
				$('#submit').val("Updating");
			},
			success: function (data) {
				if (data.error != 'false') {
					$('#editlaptopform')[0].reset();
					$('#editLaptopModal').modal('hide');
					window.location.reload();
				} else {
					$('#editlaptopform')[0].reset();
					$('#editLaptopModal').modal('hide');
					window.location.reload();
					toastr.success("YYEESSSSSSS");
				}

			}
		});
	});


	$('#editLaptopModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var recipient = button.data('whatever')
		var url = './php_action/getlaptop.php' + '?tf_id=' + recipient;
		var modal = $(this);

		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (data) {
				$('#tf_id').val(data.tf_id);
				$('#brand').val(data.brand);
				$('#model').val(data.model);
				$('#service_tag').val(data.service_tag);
				$('#mac_address').val(data.mac_address);
				$('#status').val(data.status);
			}
		});
	});



	$('#issueLaptopModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var tf_id = button.data('whatever')
		var url = './php_action/getlaptopid.php' + '?tf_id=' + tf_id
		var modal = $(this);

		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function (data) {
				$('#tf_id_issue').val(data.tf_id);
			}
		});
	});
	


	$('#issuelaptopform').on('submit', function (event) {
		event.preventDefault();
		var data1 = $('#issuelaptopform').serialize();
		var url1 = './php_action/issuelaptop.php';
		$.ajax({
			url: url1,
			dataType: 'json',
			type: 'POST',
			data: data1,
			beforeSend: function () {
				$('#submit').val("Updating");
			},
			success: function (data) {
				if (data.error != 'true') {
					$('#issueLaptopModal').modal('hide');
					$('#issuelaptopform')[0].reset();
					window.location.reload();
				} else {
					$('#issueLaptopModal').modal('hide');
					$('#issuelaptopform')[0].reset();
					window.location.reload();
				}

			}
		});
	});


	$('#editprinterform').on('submit', function (event) {
		event.preventDefault();
		var data1= $('#editprinterform').serialize();
		var url = './php_action/editprinter.php';

		$.ajax({
			url: url,
			dataType: 'json',
			type: 'POST',
			data: data1,
			success: function (data) {
				if (data.error != 'false') {
					$('#editprinterform')[0].reset();
					$('#editprinterModal').modal('hide');
					window.location.reload();
				} else {
					$('#editprinterform')[0].reset();
					$('#editprinterModal').modal('hide');
					window.location.reload();
				}

			}
		});
	});


	$('#viewissuedreportmodal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) // Button that triggered the modal
		var id = button.data('whatever')
		var url = './php_action/gettoner_id.php' + '?id=' +id
		var modal = $(this);

		$.ajax({
			url: url,
			dataType: 'json',
			type: 'GET',
			success: function(data) {
				$('#viewissuedreportmodal').modal('show');
				$('#issuedtoners').html(data)
			}
		});
	});






});