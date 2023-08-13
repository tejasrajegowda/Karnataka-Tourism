<?php
$con = mysqli_connect('localhost', 'root', '','project');
$name=$_POST['name'];
$country=$_POST['country'];
$email=$_POST['email'];
$date=$_POST['date'];
$duration=$_POST['duration'];
$package=$_POST['package'];
$persons=$_POST['persons'];
$number=$_POST['number'];
$sql = "INSERT INTO users (fullname, country, email, date, duration,package,persons,phone) VALUES ('$name', '$country', '$email', '$date', '$duration','$package','$persons','$number')";

if(mysqli_query($con, $sql))
{
	echo "Registration Successful. Payment details are sent to your mail!";
}
?>
	