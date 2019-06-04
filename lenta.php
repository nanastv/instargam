<!DOCTYPE html>
<html>
<head>
	<title>lenta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1','root','','nanastv');
		$query = mysqli_query($connect,"SELECT * FROM inst WHERE id='". $_GET['id']. "' ");
		$da = $query->fetch_assoc();
	 ?>
	 <header>
	 	<div class="row">
	 		<div class="w-75 mx-auto d-flex" style="height: 75px">
		 		<div class="col-4">
		 			<div class="d-flex">
		 				<div class="mt-3">
			 				<a href="#">
			 				<img src="img/instagram-logo.png" class="w-50">
		 					</a>
		 				</div>
		 				<a href="#">
		 				<img src="img/instagram_logo.jpg" class="w-50">
		 				</a>
		 			</div>
		 		</div>
		 		<div class="col-4 mt-4">
		 			<input type="" name="" placeholder="Поиск">
		 		</div>
		 		<div class="col-4">
		 			<div class="d-flex">
		 				<div class="mt-3 mr-2 ml-auto">
			 				<a href="#">
			 				<img src="img/icons8-new-post-50.png" class="w-75">
		 					</a>
		 				</div>
		 				<div class="mt-3 mr-2">
			 				<a href="#">
			 				<img src="img/icons8-new-post-50.png" class="w-75">
		 					</a>
		 				</div>
		 				<div class="mt-3 ">
			 				<a href="#">
			 				<img src="img/icons8-new-post-50.png" class="w-75">
		 					</a>
		 				</div>
		 			</div>
		 		</div>
	 		</div>
	 	</div>
	 </header>

	 <div class="bg-light">
	 	<div class="row p-3">
	 		<div class="w-75 mx-auto d-flex" style="height: 120px">
	 			<div class="col-2">
	 			 <?php echo '<img style="height:80px;width=80px" class="rounded-circle" src="' . $da['avatar'] . '">';?>
	 			</div>
	 			<div class="col-3">
	 				<p>
	 					Имя: <?php echo $da['name'];  ?> 
	 				</p>
	 				<p>
	 					Логин: <?php echo $da['login'];  ?>
	 				</p>
	 				<p>
	 					E-mail: <?php echo $da['email'];  ?>

	 				</p>
	 			</div>
	 			<div class="col-2">
	 				<form method="POST" action="update.php" enctype="multipart/form-data">
	 					<input type="hidden" name="name">
	 					<input type="hidden" name="login">
	 					<input type="hidden" name="email">
	 					<input type="hidden" name="pass">
	 					<input type="hidden" name="avatar">
	 					<button>Редактировать профиль</button>
	 				</form>
	 			</div>
	 		</div>
	 	</div>
	 	<div class="w-75 mx-auto">
	 		<div class="p-3 mb-3">
	 			<h5>Добавить пост</h5>
				 <form method="POST" action="insert.php" enctype="multipart/form-data">
					<input type="" placeholder="Заголовок" name="post_headline">
					<input type="" placeholder="Текст" name="post_text">
					<input type="file" name="img">
					<?php echo '<input type="hidden" name="id" value="'.$da['id'].'"  >'?>
					<button>da</button>
				</form>
			</div>
		<div>
			<?php 
			$que = mysqli_query($connect,"SELECT * FROM posts INNER JOIN inst ON posts.inst_id = inst.id  ORDER BY posts.id DESC ");	
			for ($i=0; $i < $que->num_rows; $i++) { 
				$po = $que->fetch_assoc();?>
				<div class=""> 
					<div class="row">
						<div class="col-1">
							 <?php echo '<img style="height:40px;width=40px" class="rounded-circle" src="' . $po['avatar'] . '">';?>
						</div>
						<div>
							<h5> <?php echo $po['login'];  ?> </h5>
						</div>
					</div>
							
						 <h4> <?php echo $po['headline']; ?> </h4>
						  <img src= <?php echo '"' . $po['img'] . '"' ;?> >
						 <p> <?php echo $po['text']; ?> </p>
						 <hr>
						<?php } ?>
				</div>
		</div>
		</div>
	</div>
</body>
</html>