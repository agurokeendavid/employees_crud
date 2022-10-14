<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Manage Employees</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/font-awesome.min.css">
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/buttons/buttons.dataTables.min.css">
	<!-- End plugin css for this page -->
	<?php if (isset($page_data['styles_path']) && !empty($page_data['styles_path'])) : ?>
		<?php foreach ($page_data['styles_path'] as $value) : ?>
			<link href="<?= base_url() ?>assets/<?= $value . '.css' ?>" rel="stylesheet">
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>
