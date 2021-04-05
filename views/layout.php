<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="<?= $tpl != 'home' ? 'inner-page' : ''  ?>">


	<?php

		include('common/header.php');

		include('pages/'.$tpl.'.php');

		include('common/footer.php');

	?>


</body>
</html>