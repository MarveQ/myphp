<html>
<head>
<title>List Customers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Customers</h1>
<p><br>
  <br>
  
  
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

$query = "select * from custTab order by custFirst, custLast";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
//print "There are currently $num customers on file<br><br>";

print "<table>";
print "<tr><td><b>Last Name</b></td>";
print "<td><b>$First Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>Change</b></td>";
print "<td><b>Delete</td></b></tr>";

// and this loop proccess the records from the query
// they were written into an associative array
// and are now returned by key
// then the results are printed on one line
while ($row = mysqli_fetch_assoc($result)) {
	$custNo = $row['custNo'];
	$custFirst = $row['custFirst'];
	$custLast = $row['custLast'];
	$custAddress = $row['custAddress'];
	$custCity = $row['custCity'];
	print "<tr>";
	print "<td>$custLast</td>";
	print "<td>$custFirst</td>";
	print "<td>$custAddress</td>";
	//print "$custNo $custFirst $custLast $custAddress $custCity ";

	print "<td><a href=customer_update4.php?action=u&id=";
	print $custNo;
	print ">Change</a></td>";	

	print "<td><a href=customer_action4.php?action=d&id=";
	print $custNo;
	print "> Delete </a></td>";	

	print "</tr>";
}
print "</table>";
?>
</p>
<!-- this gives us a link to add a customer -->
<p><a href="customer_update4.php?action=a">Add a Customer</a></p>
<p><a href="../index.html">Return </a></p>
</body>
</html>
