<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<?php $i = 0; ?>
		<?php foreach ($columns as $column) : ?>
			<div id="column-<?php echo $i; ?>">
				<?php echo $column->render(); ?>
			</div>
			<?php $i++; ?>
		<?php endforeach; ?>
	</body>
</html>