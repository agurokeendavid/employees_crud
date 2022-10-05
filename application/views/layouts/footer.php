<script src="<?= base_url() ?>assets/plugins/jquery-3.5.1.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/popper.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap.min.js"></script>
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
