<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Коментар</title>
</head>
<body>
	<div>
		<h1>Дяуємо, ваше повідомлення отримано</h1>
	</div>
	<div>
		<h2>Ви написали:</h2>
		<p><?php $message = htmlentities($_POST['tags']); 
			echo $message ?></p>
		<h3>Дата та час обробки повідомлення: <?php $date = date('Y-m-d H:i:s');
		echo $date ?></h3>
		
	</div>
</body>
</html>