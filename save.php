<?php
echo "Name is ".$_POST['uname']."<br />";

echo "Age is ".$_POST['age']."<br />";

echo "University is ".$_POST['uni']."<br />";

echo "Location is ".$_POST['loc']."<br/>";

echo "Blode group is ".$_POST['bgroup']."<br/>";

echo "NUMBER is ".$_POST['num']."<br/>";




// Make connection to database
$conn = @new mysqli('localhost', 'root', '', 'rajpoth');
if ($conn->connect_error) {
die('Connect Error: ' . $conn->connect_error);
} else {
echo 'Successful connection to MySQL <br/>';

$name=$_POST['uname'];
$age=$_POST['age'];
$univer=$_POST['uni'];
$loca=$_POST['loc'];
$bl=$_POST['bgroup'];
$number=$_POST['num'];

$sql = "INSERT INTO `blood_group` (`name`,`location`,`university`,`age`, `number`, `blood_group`) VALUES ('$name','$loca','$univer','$age', '$number','$bl')";


// Run the query and display appropriate message
if (!$result = $conn->query($sql)) {
echo "error";
} else {
echo "Rows successfully added<br/>";
}
}

?>
<label><b><td><a href="main.php"?id="main">main_manu</a></td></b></label>

