<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username ="ybrykin01";
        $password="Nscc240!@#";    
        $dbname="ybrykin01";
        $conn = new mysqli($hostname, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("Connection failed: ".$conn->connect_error);
        }
        echo "The database was connected";
    ?>
</body>
</html>