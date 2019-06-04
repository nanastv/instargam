<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
	$query = mysqli_query($connect,"UPDATE posts SET name=". $_POST['name']. " WHERE id=".$_GET['id']." ");	
	header('Location: http://insta/inst/lenta.php?id='.$_POST['id']);
 ?>