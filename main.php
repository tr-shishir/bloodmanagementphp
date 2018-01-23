<?php
session_start();
if(!isset($_SESSION['login_user'])){
header("location: login.php");
}
?>

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



<form action="save.php" method="post">
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
	
	<label><b><td><a href="logout.php"?id="logout">Logout</a></td></b></label>
    
	
	
	
  </div>

  <div class="container" style="background-color:#FFF">
   

  </div>
</form>



  <h2>Database Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Username</th>
		<th>AGE</th>
		<th>University</th>
		<th>location</th>
        <th>number</th>
        <th>Blood_group</th>
		<th>Last Donation Date</th>
		<th>Add donation date</th>
		<th>Edit profile</th>
      </tr>
    </thead>
    <tbody>
<?php

$con = @new mysqli('localhost', 'root', '', 'rajpoth');
if ($con->connect_error) {
die('Connect Error: ' . $con->connect_error);
}

 $result2 = $con->query("SELECT DISTINCT blood_group.id ,blood_group.university,blood_group.age,blood_group.name,blood_group.location,blood_group.number,blood_group.blood_group,donation_story.date\n"

    . "FROM blood_group\n"

    . "LEFT JOIN donation_story\n"

    . "ON blood_group.id=donation_story.user_id\n"
	
	. "ORDER BY blood_group.id");
 
 
 while($row = $result2->fetch_array() )
 {

		
       echo"<tr>
        <td>".$row['name']."</td>
		<td>".$row['age']."</td>
		<td>".$row['university']."</td>
        <td>".$row['location']."</td>
		<td>".$row['number']."</td>
        <td>".$row['blood_group']."</td>
		<td>".$row['date']."</td>
		<td><a href=donar.php?id=".$row['id'].">link text</a></td>
		<td><a href=edit.php?id=".$row['id'].">link text</a></td>
      </tr>";
 

}

 
?>
    </tbody>
  </table>
</div>

</body>
</html>
