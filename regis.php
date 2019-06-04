<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
	$query = mysqli_query($connect,"INSERT INTO inst (email, name, login, pass) VALUES ('" . $_POST['email']. "','" . $_POST['name']. "','" . $_POST['login']. "','" . $_POST['pass']. "') ");
	mail( $_POST['email'],'Hello, '. $_POST['name'] ,'You are registered!' );
	header('Location: http://insta/inst/autor.php');
 ?>