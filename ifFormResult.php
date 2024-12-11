<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Customer Information Result</h1>
    <?php
        $userName = $_REQUEST["userName"];
        $userAddress = $_REQUEST["userAddress"];
        $userState = $_REQUEST["userState"];
        $userZip = $_REQUEST["userZip"];

        if($userName == NULL || is_numeric($userName))
        {
            echo "User name was not found";
        } 
        else if ($userAddress == NULL){
            echo"User address was not found";
        } 
        else if ($userState == NULL || is_numeric($userState)){
            echo"User state was not found";
        } 
        else if ($userZip == NULL || !is_numeric($userZip)){
            echo"User zip was not found";
        } 
        else{
            echo"The form was filled correctly!";
        }
        
        
    ?>
    <br> <br>
    <a href="ifForm.html">return to the form</a>
</body>
</html>