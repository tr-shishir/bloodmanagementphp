
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
	
	 <label><b>AGE</b></label>
    <input type="text" placeholder="Enter Age" name="age" required><br/>
	
	 <label><b>University</b></label>
    <input type="text" placeholder="Enter University" name="uni" required><br/>
	
	<label><b>location</b></label>
    <input type="text" placeholder="Enter Location" name="loc" required><br/>

    <label><b>number</b></label>
    <input type="text" placeholder="Enter number" name="num" required><br/>
	
	<label><b>Blood_group</b></label>
    <input type="text" placeholder="Enter Blood_group" name="bgroup" required><br/>

    <button type="submit">Submit</button><br/>
    <label>
      <input type="checkbox" checked="checked"> Remember me
    </label><br/><br/>
	
	
    
	
	
	
  </div>

  <div class="container" style="background-color:#FFF">
   

  </div>
</form>


<?php  $vr=$_GET['id'];?>
<?php


      $conn = @new mysqli('localhost', 'root', '', 'rajpoth');
if(!$conn){die('Connect Error: ' . $conn->connect_error);}
 

if($conn && isset($_POST) && !empty($_POST)){
echo 'Successful connection to MySQL <br/>';

$name=$_POST['uname'];
$age=$_POST['age'];
$univer=$_POST['uni'];
$loca=$_POST['loc'];
$bl=$_POST['bgroup'];
$number=$_POST['num'];
$vr=$_GET['id'];

$sql = "UPDATE `blood_group` SET `name` = '$name', `location` = '$loca', `age` = '$age', `university` = '$univer', `number` = '$number', `blood_group` = '$bl' WHERE `blood_group`.`id` = '$vr'";



if (!$result = $conn->query($sql)) {
echo "error";
} else {
echo "Rows successfully added<br/>";
}
}

 


 
?>