<html>
<head>
<title>List Students</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Students</h1>
<p><br>
  <br>
  
  
<?php

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

$query = "select * from studentTab";
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
// this is the same basic print line as before	
	print "$stuID $stuFirst $stuLast $stuAddress $stuZip ";
// except now we add some extra linkes to create a dynamic link to the update program
// first we are calling the update program
// note that a 'u' is passed as a parm, so the update program knows this is an update, not an add
// also the student number is passed as a separate parm  
	print "<a href=student_update2.php?action=u&id=";
// here is the customer number
	print $stuID;
// this is the link for the user	
	print ">Change</a><br>";	
// or you could do it in a single line (commented out below)
//	print "<a href=student_update2.php?action=u&id=" . $stuID . ">Change</a><br>";	
	
}

?>
</p>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="student_update2.php?action=a">Add a Student</a>

<br>
<br>
<a href="index.html">Return </a>

</body>
</html>
