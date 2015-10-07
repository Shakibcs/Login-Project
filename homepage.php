<?php 
ob_start();
session_start();
if($_SESSION['name']!='shakibhousebd'){
header('location:login.php');
}
?>




<!doctype html >
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>homepage </title>
	<link rel="stylesheet" href="styling.css">
	
</head>
	
	<body>
	
	<h2>Hi SHAKIB Welcome to Your HomePage!</h2>

<table>
<tr>
<td>Name:</td>
</tr>
<tr>
<td>Email:</td>
</tr>
<tr>
<td>Age:</td>
</tr>
<tr>
<td>Country:</td>
</tr>
</table>
<?php include('config.php');
 
 $query=mysql_query("select firstname,email,age,country from new_table where id=1") or die("unable to query");
 while($row=mysql_fetch_assoc($query))
 {
 

 ?>
 
<div>
<table>
<tr>
<td><?php echo $row['firstname']; ?></td>
</tr>
<tr>
<td><?php echo $row['email']; ?></td>
</tr>
<tr>
<td><?php echo $row['age']; ?></td>
</tr>
<tr>
<td><?php echo $row['country']; ?></td>
</tr>



<?php 
 }
?>
</table>
</div>
	<a href="logout.php">logout</a>
	</div>

	</body>
</html>