<?php
require ("../db_connect.php");
session_start();
require("../functions.php");

if (isset($_SESSION['login']))
{
	redirect_to("admin.php");
}

		$query = "SELECT * FROM `admins`";
		
		$result = mysqli_query($connection, $query);
		
		$set = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="../styles/common.css">
</head>
<body>
   
<?php 
if (isset($_POST['submit']))
{
	$password_q = $_POST['pass'];

	if ($set["password"] == md5($password_q)){
		$_SESSION['login'] = $password_q;
		redirect_to('admin.php');
	}
	else{ 
			echo "Error!";
		}
}
?>
  <form method="post" action="index.php" class="admin_block">
  	<h2 class="admin_block_tit">Administrator</h2>
    <p class="admin_block_poragraph" require>Что бы войти от именни администратора введите пароль</p>
  	<div class="input_box">
	  <input type="password" name="pass">
	</div><br>
	<input class="button" type="submit" value="Enter" name="submit">
  </form>


</body>
</html>