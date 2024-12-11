<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String Result</h1>
    <?php
        $userName = $_REQUEST["userName"];
        $stringLength = strlen($userName);
        $firstName = trim(substr($userName, strpos($userName, ",")+ 1, $stringLength));
        $lastName = substr($userName, 0, strpos($userName, ","));
        echo "Your full name: $firstName $lastName";
    ?>
    <br> <br>
    <a href="stringForm.html">return to the form</a>
</body>
</html>