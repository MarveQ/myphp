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
$hostname="localhost";    
$username="ybrykin01";   
$password="Nscc240!@#";    
$dbname="ybrykin01";  

$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["id"];

// here are all the fields from the form
$custLast = $_REQUEST["custLast"];
$custFirst = $_REQUEST["custFirst"];
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZip"];
$custEmail = $_REQUEST["custEmail"];
$custPhone = $_REQUEST["custPhone"];

$dt = date('Y-m-d');

// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
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
}

// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update custTab
		set custLast = '$custLast',
		custFirst = '$custFirst', 
		custAddress = '$custAddress', 
		custCity = '$custCity', 
		custState = '$custState', 
		custZip = '$custZip', 
		custEmail = '$custEmail',
		custPhone = '$custPhone',
		custChangeDate = '$dt' 
		where custNo = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} // end u

if ($action == 'd') {

			$query = "delete from custTab
			where custNo = '$id'";
			mysqli_query($conn, $query) or
				die(mysqli_error());
		print "<h3>Delete Successful</h3>";
	} 

?>

<p><a href="customer_list4.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
