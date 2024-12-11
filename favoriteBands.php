<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bands</title>
</head>
<body>
    <h1>Favorite Bands</h1>
    <br>
    <?php
        $bandArray = ["Led Zeppelin", "Aerosmith", "The Beatles", "AC/DC", "Black Sabbath"];
        echo "Bands I like: ";
        for($i = 0; $i < count($bandArray); $i++)
        {
            if($i != count($bandArray) - 1)
                echo "$bandArray[$i], ";
            else echo "$bandArray[$i].";
        }
    ?>
</body>
</html>