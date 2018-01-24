<?php  $vr=$_GET['id'];?>
<?php


      $conn = @new mysqli('localhost', 'root', '', 'rajpoth');
if(!$conn){die('Connect Error: ' . $conn->connect_error);}
 

$conn->query("DELETE FROM blood_group WHERE `blood_group`.`id` = '$vr' ");



 


 
?>


<label><b><td><a href="main.php"?id="main">main_manu</a></td></b></label>