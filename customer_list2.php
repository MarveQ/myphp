<html>
<head>
<title>List Customers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Customers</h1>
<br><br>
  
<?php

$hostname="localhost";    
$username="ybrykin01";   
$password="Nscc240!@#";    
$dbname="ybrykin01";   


$conn = new mysqli($hostname, $username, $password, $dbname );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$query = "select * from custTab";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);
print "There are currently $num customers on file<br><br>";

while($row = mysqli_fetch_assoc($result)) {
	$custNo = $row['custNo'];
	$custLast = $row['custLast'];
	$custFirst = $row['custFirst'];
	$custAddress = $row['custAddress'];
	$custCity = $row['custCity'];
    $custState = $row['custState'];
	$custZip = $row['custZip'];
	$custEmail = $row['custEmail'];
	$custPhone = $row['custPhone'];
	$custAddDate = $row['custAddDate'];
    $custChangeDate = $row['custChangeDate'];
	print "$custNo: $custLast $custFirst <br>Address: $custAddress $custCity $custState $custZip <br>Contact info:$custEmail $custPhone<br>";
	print "<a href=customer_update2.php?action=u&id=";
	print $custNo;
// this is the link for the user	
	print ">Change</a><br>";	

}

?>

<br>
<a href="customer_update2.php?action=a">Add a Customer</a>

<br>
<br>
<a href="index.html">return</a>
</body>
</html>
