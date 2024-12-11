<html>
<head>
<title>Student Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>Student Status</h1>
<p>&nbsp;</p>



<?php 

// this connects To database
$hostname="localhost";    
$username="ybrykin01";   
$password="Nscc240!@#";    
$dbname="ybrykin01";    

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// here are all the fields from my form
$stuFirst = $_REQUEST["stuFirst"];
$stuLast = $_REQUEST["stuLast"];
$stuAddress = $_REQUEST["stuAddress"];
$stuZip = $_REQUEST["stuZip"];
$stuStatus = $_REQUEST["stuStatus"];
$stuEnrollAge = $_REQUEST["stuEnrollAge"];
$stuComment = $_REQUEST["stuComment"];

// the date function is used near the end to set the Added Date for the record
// check out the data function docmentation to see how it is formatted
$dt = date('Y-m-d');

// now I setup a query to insert
// I must have the EXACT number of fields and in the EXACT order
// null is used in the first first to establish the auto key
// why is there a null in the last field?
$query = "insert into studentTab values (
	null, 
	'$stuFirst', 
	'$stuLast', 
	'$stuAddress', 
	'$stuZip', 
	'$stuStatus', 
	'$stuEnrollAge', 
	'$stuComment', 
	'$dt',
	null
)";

//this runs the query created above
	mysqli_query($conn, $query) or
	die(mysqli_error($conn));

//this prints response back to the user with their first and last name
	print "<h3>Thanks $stuFirst $stuLast for entering your information</h3>";

?>

<p><a href="studentForm.html">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
