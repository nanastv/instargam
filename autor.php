<!DOCTYPE html>
<html>
<head>
	<title>	autor	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
	<div class="row">
		<div class="col-3 ml-auto mt-5 mr-3">
			<img src="img/pho.png" class="w-100">
		</div>

		<div class="col-3 mr-auto mt-5 border bg-white px-4">
			<div class="">
				<img src="img/Instagram_logo.png" class="w-100">
				<p class="text-center text-muted">Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.</p>
			</div>
		<form method="POST" action="autorization.php" > 
			<div class="input-group flex-nowrap mt-2">
			 	 <input type="text" name="login" class="form-control" placeholder="Имя пользователя" aria-label="Username" aria-describedby="addon-wrapping">
			</div>
			<div class="input-group flex-nowrap mt-2">
			 	 <input type="password" name="pass" class="form-control" placeholder="Пароль" aria-label="Username" aria-describedby="addon-wrapping">
			</div>
				<button class="mt-3 btn btn-primary btn-sm btn-block">Вход</button>	
		</form>
			<div> 
				<p class="text-center text-muted mt-3 mb-4">Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов cookie.</p>
			</div>
			<div class="d-flex text-center mb-1">
				<p class="mx-auto text-danger">
				<?php echo $_GET['er']; ?>
				</p>
			</div>
			<div class="d-flex text-center mb-4">
				<p class="ml-auto">Нет аккаунта? </p><a class="mr-auto" href="index.php"> Регистрация</a>
			</div>
		</div>
	</div>
</body>
</html>