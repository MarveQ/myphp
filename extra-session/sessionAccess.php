<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $loggedIn = false;
} else {
    $loggedIn = true;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Access Page</title>
</head>

<body>
<?php if ($loggedIn): ?>
    <p>You are logged in and can access this page.</p>
    <p><a href="session.html">Return to Session Page</a></p>
<?php else: ?>
    <h2>Access Denied</h2>
    <p>You are NOT logged in.
    <p><a href="session.html">Return to Session Page</a></p>
<?php endif; ?>
</body>
</html>
