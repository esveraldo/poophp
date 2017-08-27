<?php require_once '../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template PHP OO</title>
</head>
<body>
	<h1>Página inicial</h1>
	<?php 
		use App\DI\Container;

		$clients = Container::getSelectClients();
		$dados   = $clients->select();
		foreach($dados as $dado) {
	 ?>
		<h2><?= $dado['name'];?></h2>
	 <?php }; ?>
</body>
</html>