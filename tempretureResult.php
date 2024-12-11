<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Result:</h1>
    
    <?php
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    $temperature = $_REQUEST['temperature'];
    $conversionType = $_REQUEST['conversion'];

    if ($conversionType == 'CtoF') {
        $convertedTemp = celsiusToFahrenheit($temperature);
        echo "<h1>$temperature °C is equal to $convertedTemp °F</h1>";
    } else if ($conversionType == 'FtoC') {
        $convertedTemp = fahrenheitToCelsius($temperature);
        echo "<h1>$temperature °F is equal to $convertedTemp °C</h1>";
    }
    ?>
    <br>
    <br>
    <a href="tempreture.html">return to the form</a>
</body>
</html>