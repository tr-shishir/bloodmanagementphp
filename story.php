<?php
echo "UserId is ".$_POST['uid']."<br />";

echo "last donation date ".$_POST['date']."<br/>";


// Make connection to database
$conn = @new mysqli('localhost', 'root', '', 'rajpoth');
if ($conn->connect_error) {
die('Connect Error: ' . $conn->connect_error);
} else {
echo 'Successful connection to MySQL <br/>';

$Userid=$_POST['uid'];
$day=$_POST['date'];


$sql ="INSERT INTO `donation_story` ( `user_id`, `date`) VALUES ('$Userid', '$day')";


// Run the query and display appropriate message
if (!$result = $conn->query($sql)) {
echo "error";
} else {
echo "Rows successfully added<br/>";
}
}