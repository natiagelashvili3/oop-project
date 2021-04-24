<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= HOST ?>assets/admin_resources/css/style.css">
</head>
<body>


	<?php

		include('common/header.php');

	?>

	<div class="main">
		<?php
		
			include('pages/'.$tpl.'.php')

		?>
	</div>

	<script>
		var siteUrl = '<?= HOST ?>';
	</script>

	<script src="<?= HOST ?>assets/admin_resources/js/script.js"></script>
</body>
</html>