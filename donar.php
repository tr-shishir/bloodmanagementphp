
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

<?php $vr=$_GET['id'];?>
			<h2>Donar list Table</h2>

			
  <table class="table table-bordered">
    <thead>
      <tr>
	    <th>Id</th>
        <th>UserId</th>
		<th>date</th>
		
      </tr>
    </thead>
    <tbody>
<?php
$con = @new mysqli('localhost', 'root', '', 'rajpoth');
if ($con->connect_error) {
die('Connect Error: ' . $con->connect_error);
}

 $result = $con->query("SELECT * FROM `donation_story` WHERE user_id=$vr");

 
 
 while($row = $result->fetch_array() )
 {

		
       echo"<tr>
	    <td>".$row['id']."</td>
        <td>".$row['user_id']."</td>
        <td>".$row['date']."</td>
		
<a href=login_save.php?id=".$row['user_id'].">link text</a>
		
		
      </tr>";
 

}
 
?>

    </tbody>
  </table>
</div>

</body>
</html>