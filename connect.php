<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$zip = filter_input(INPUT_POST, 'zip');
$service = filter_input(INPUT_POST, 'service');
$service1 = filter_input(INPUT_POST, 'service1');
if (!empty($firstname)){
if (!empty($address)){
$host = "localhost";
$dbusername = "niks";
$dbpassword = "0905";
$dbname = "login";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO orders (firstname,email,phone,address,city,state,zip,service,service1 )
values ('$firstname','$email','$phone','$address','$city','$state','$zip','$service','$service1')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
if(isset($_POST["submit1"]))
{
	header('Loaction:thanks.php');
}
?>