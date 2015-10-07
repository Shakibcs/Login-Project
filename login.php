<?php 
include('config.php');

if(isset($_POST['form1'])){

	try{
	if(empty($_POST['first_name'])){
		throw new Exception("username cannot be empty");
	}
	if(empty($_POST['password'])){
		throw new Exception(" password cannot be empty");
	}
	//$password=$_POST['password'];  //admin
	$password=md5($_POST['password']);
	$num=0;
	$query=mysql_query("select * from new_table where firstname='$_POST[first_name]' and password='$password'");
	$num=mysql_num_rows($query);
	if($num>0)
	{
	session_start();
	$_SESSION['name']='shakibhousebd';
	header('location:homepage.php');
	
	}
	else{
	throw new Exception("Invalid Username or Password");
	}
	}
	
	
	catch(Exception $e){
	$error_message=$e->getMessage();
	}
}

?>





<!doctype html >
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>login page </title>
	<style>
	body{background-color:#CC7A00;}
div{background:#804C4C;position:absolute;left:100px;top:50px;border-top:3px red solid;
    padding:50px;
}
	</style>
</head>
	
	<body>
	<div>
	<h2>Login</h2>
	<?php 
	if(isset($error_message)){echo $error_message;}
	?>
	<form action="" method="post">
	<table>
	<tr>
	<td>Name:</td>
	<td><input type="text" name="first_name"></td>
	</tr>
	<tr>
	<td>Password:</td>
	<td><input type="password" name="password"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" value="login" name="form1">
	</td>
	</tr>
	</table>
	<a href="index.php">back to previous</a>
	</form>
	</div>
	</body>
	</html>
	