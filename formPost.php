<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $userFirstName = $_REQUEST["userFirstName"];
    $userLastName = $_REQUEST["userLastName"];
    $userAge = $_REQUEST["userAge"];
    $userCity = $_REQUEST["userCity"];
        echo "$userFirstName $userLastName is $userAge years old. He lives in $userCity.";
    ?>
    <br> <br>
    <a href="forms.html">return to the form</a>
</body>
</html>