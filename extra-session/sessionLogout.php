<?php
session_start();

// Log the user out by destroying the session
session_unset();
session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>
<h2>Logout Successful</h2>
<p><a href="../index.html">Return to Main Page</a></p>
</body>
</html>
