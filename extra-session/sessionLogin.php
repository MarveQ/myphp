<?php
session_start();

// Log the user in by setting a session variable
$_SESSION['loggedin'] = true;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<h2>Login Successful</h2>
<p><a href="session.html">Return to Session Page</a></p>
</body>
</html>
