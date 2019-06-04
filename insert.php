<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
	$query = mysqli_query($connect,"INSERT INTO posts (headline, text, img, inst_id) VALUES ('" . $_POST['post_headline']. "', '" . $_POST['post_text']. "', 'img/" . $_FILES['img']['name']. "','" . $_POST['id']. "' ) ");		
	move_uploaded_file($_FILES['img']['tmp_name'],'img/' . $_FILES['img']['name']);
	header('Location: http://insta/inst/lenta.php?id='.$_POST['id']);
 ?>