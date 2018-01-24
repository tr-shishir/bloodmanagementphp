<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">



<form action="" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br/>
	
	 <label><b>E-mail</b></label>
    <input type="text" placeholder="Enter Email" name="age" required><br/>
	
	 <label><b>password</b></label>
    <input type="text" placeholder="Enter password" name="uni" required><br/>
	
	
    <button type="submit">Submit</button><br/> <br/>
	<form action="login.php">
	<br/>
	<label><b><td><a href="login.php"?id="login">Login</a></td></b></label>
   
	</form>
	
  </div>

  <div class="container" style="background-color:#FFF">
   

  </div>
</form>

<?php
$connection=mysqli_connect('localhost', 'root', '', 'rajpoth');
if(!$connection){
	die("connection error".mysqli_error($connection));
	
}
if(isset($_POST) & !empty($_POST)){
$user=$_POST['uname'];
$mail=$_POST['age'];
$pass=$_POST['uni'];
$sql = "INSERT INTO `admin` (`name`, `email`, `password`) VALUES ('$user', '$mail', '$pass')";
$result=mysqli_query($connection,$sql);
if($result){
	echo "user registration complete";
}else{
	echo "user registration Error ";
}
}
?>
