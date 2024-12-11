<html>
<head>
<title>List Students</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Students</h1>
<br><br>

  
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


// here are setup a query that will select all of the students on the table	
$query = "select * from studentTab";

// this function processes the query in php
$result = mysqli_query($conn, $query);

// this function returns how many rows (hits) were in the query
$num = mysqli_num_rows($result);
print "There are currently $num students on file<br><br>";

// and this loop proccess the records from the query
// they were written into an associative array
// and are now returned by key
// that is the $row variable seen in the code
// the results are then printed on one line
// you can pick any fields you like to print 
while($row = mysqli_fetch_assoc($result)) {
	$stuID = $row['stuID'];
	$stuFirst = $row['stuFirst'];
	$stuLast = $row['stuLast'];
	$stuAddress = $row['stuAddress'];
	$stuZip = $row['stuZip'];
	print "$stuID $stuFirst $stuLast $stuAddress $stuZip<br>";
}

?>

<br>
<a href="index.html">Return </a>
</body>
</html>
