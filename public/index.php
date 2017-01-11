<?php
	require __DIR__ . '/../vendor/autoload.php';
	$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
	$dotenv->load();
?>

<html>
<head>
</head>
<body>
	<h1>Hello Ricky!!!</h1>
	<h5>This is my ENV test variable value: <?php echo getenv('TEST_VARIABLE'); ?></h5>
</body>
</html>

