<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
	$query = mysqli_query($connect,"SELECT * FROM inst WHERE login='". $_POST['login']."' AND  pass='". $_POST['pass']. "'");
	if ($query->num_rows == 1) {
		$po = $query->fetch_assoc();
		header('Location: http://insta/inst/lenta.php?id='.$po['id']);
	}else {
		$er= 'Нет такого пользователя.';
		header('Location: http://inst/inst/autor.php?er='.$er);
	}
	
 ?>
