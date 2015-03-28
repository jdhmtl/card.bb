<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?= $this->title; ?></title>
	</head>
	<body>
		<header></header>
		<div id="container">
			<?= $this->yieldView(); ?>
		</div>
		<footer></footer>
	</body>
</html>