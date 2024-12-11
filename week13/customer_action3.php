
<html>
<head>
<title>Customer Update</title>
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

$action = $_REQUEST["action"];
$id = $_REQUEST["id"];

$custLast = $_REQUEST["custLast"];
$custFirst = $_REQUEST["custFirst"];
$custAddress = $_REQUEST["custAddress"];
$custCity = $_REQUEST["custCity"];
$custState = $_REQUEST["custState"];
$custZip = $_REQUEST["custZip"];
$custEmail = $_REQUEST["custEmail"];
$custPhone = $_REQUEST["custPhone"];

$dt = date('Y-m-d');

if ($action == 'a') {
    $query = "INSERT INTO custTab values (
        '$custLast',
        '$custFirst',
        '$custAddress',
        '$custCity',
        '$custState',
        '$custZip',
        '$custEmail',
        '$custPhone',
        '$dt'
    )";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    print "<h3>Thanks $custFirst for entering your information</h3>";
}

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
        custDateChanged = '$dt',
		where custNO = '$id'";
	mysqli_query($conn, $query) or
		die(mysqli_error());
	print "<h3>Update Successful</h3>";
} // end u
?>

<p><a href="customer_list3.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
