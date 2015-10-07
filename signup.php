<?php  
include('config.php');	

if(isset($_POST['form1'])){

	try{
	if(empty($_POST['first_name'])){
	throw new Exception('first name cannot be empty');
	}
	
	if(empty($_POST['last_name'])){
	throw new Exception('last name cannot be empty');
	}
	
	if(empty($_POST['email'])){
	throw new Exception('email cannot be empty');
	}
	
	if(empty($_POST['password'])){
	throw new Exception('password cannot be empty');
	}
	if(empty($_POST['age'])){
	throw new Exception('age cannot be empty');
	}
	if(empty($_POST['country'])){
	throw new Exception('country cannot be empty');
	}
	$password=md5($_POST['password']);
	
	$result=mysql_query("insert into new_table(firstname,lastname,email,password,country) values('$_POST[first_name]',
	'$_POST[last_name]','$_POST[email]','$password','$_POST[country]')") or die("unable to query") ;
	
	$success_Message="Registered Successfully";

	}

	catch(Exception $e){
		$error_Message=$e->getMessage();
	}
	
	
	}

?>

<!doctype html >
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>signup page </title>
	<style>
	body{background: #85C2A3;}
	h1{background:#2E0F4C;mergin:50px;}
	</style>
</head>
	
	<body>
	<h2>Sign UP for a Account</h2>
	
	<?php 
	if(isset($error_Message)){echo $error_Message;}
	if(isset($success_Message)){echo $success_Message;}
	?>
	<br>
	
	<form action="" method="post">
	<table>
	<tr>
	<td>First Name:</td>
	<td><input type="text" name="first_name"></td>
	</tr>
	<tr>
	<td>Last Name:</td>
	<td><input type="text" name="last_name"></td>
	</tr>
	<tr>
	<td>Email:</td>
	<td><input type="text" name="email"></td>
	</tr>
	<tr>
	<td>Password:</td>
	<td><input type="password" name="password"></td>
	</tr>
	<tr>
	<td>Age:</td>
	<td><input type="text" name="age"></td>
	</tr>
	<tr>
	<td>Country</td>
	<td><input type="text" name="country"></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" value="SINE UP" name="form1" ></td>
	</tr>
	</table>  <br>
	<a href="index.php">back to previous</a>
	</form>
	</body>
</html>