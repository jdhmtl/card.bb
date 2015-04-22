<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6832954/712126/css/fonts.css">
		<link rel="stylesheet" href="/assets/css/style.css">
		<link rel="stylesheet" href="/assets/css/cal.css">
		<title><?= $this->title; ?></title>
	</head>
	<body>
		<div class="container">
			<?= $this->partial(PARTIALS_DIR . 'flash.php'); ?>
			<?= $this->yieldView(); ?>
		</div>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="/assets/js/site.js"></script>
	</body>
</html>
