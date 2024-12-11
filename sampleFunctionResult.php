<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Change Sign of Number Result</h1>
    <?php
        function signChange($number){
            return -$number;     
        }
        
        $number = $_REQUEST["number"];
        $newNum = signChange($number);
        print "<h3>The new number is: $newNum</h3>";
    ?>
    <br>
    <br>
    <a href="sampleFunctions.html">return to the form</a>
</body>
</html>