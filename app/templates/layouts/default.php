<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="/assets/css/style.css">
		<title><?= $this->title; ?></title>
	</head>
	<body>
		<header></header>
		<div id="container">
			<?= $this->yieldView(); ?>
		</div>
		<footer></footer>
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="/assets/js/site.js"></script>
	</body>
</html>
