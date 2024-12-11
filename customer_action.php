
<html>
<head>
<title>update customer</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Customer Status</h1>
<p>&nbsp;</p>
<?php 

// this connects To database
$hostname="your hostname";    
$username="your user/db name";   
$password="Nscc240!";    
$dbname="your user/db name";     


$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$custLast = $_REQUEST["custLast"];
$custFirst = $_REQUEST["custFirst"];
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZip"];
$custEmail = $_REQUEST["custEmail"];
$custPhone = $_REQUEST["custPhone"];

$dt = date('Y-m-d');

$query = "insert into custTab values (
	null, 
	'$custLast', 
	'$custFirst', 
	'$custAddress', 
	'$custCity', 
	'$custState', 
	'$custZip', 
	'$custEmail', 
	'$custPhone',
	'$dt', 
	null
)";

	mysqli_query($conn, $query) or
		die(mysqli_error());

print "<h3>Thanks $custFirst $custLast for entering your information<br>";

?>

<p><a href="customer_update.html">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
