<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/font-awesome.min.css">
	<?php if (isset($page_data['styles_path']) && !empty($page_data['styles_path'])) : ?>
		<?php foreach ($page_data['styles_path'] as $value) : ?>
			<link href="<?= base_url() ?>assets/<?= $value . '.css' ?>" rel="stylesheet">
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>
