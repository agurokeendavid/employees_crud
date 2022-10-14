<script src="<?= base_url() ?>assets/plugins/jquery-3.5.1.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/popper.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap.min.js"></script>
<!-- Plugin js for this page-->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/pdfmake/vfs_font.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<!-- End plugin js for this page-->
<script src="<?= base_url() ?>assets/plugins/amagiloader.js"></script>
<script type="text/javascript">
	const base_url = '<?= base_url(); ?>';
</script>
<?php if (isset($page_data['scripts_path']) && !empty($page_data['scripts_path'])) : ?>
	<?php foreach ($page_data['scripts_path'] as $value) : ?>
		<script src="<?= base_url() ?>assets/<?= $value . '.js' ?>"></script>
	<?php endforeach; ?>
<?php endif; ?>
</body>
</html>
