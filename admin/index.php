<!DOCTYPE html>
<html>
<head>
<title>Orders</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone No.</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Service</th>
<th>Sub-Service</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "niks", "0905", "login");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, email,phone,address,city,state,zip,service,service1 FROM orders";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>"
. $row["email"]. "</td><td>"
. $row["phone"]. "</td><td>"
. $row["address"]. "</td><td>"
. $row["city"]. "</td><td>"
. $row["state"]. "</td><td>"
. $row["zip"]. "</td><td>"
. $row["service"]. "</td><td>"
. $row["service1"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>

