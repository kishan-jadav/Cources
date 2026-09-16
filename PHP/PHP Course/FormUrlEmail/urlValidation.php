<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Validation</title>
</head>
<body>
    <?php
        $url = "https://www.google.com";

        if(filter_var($url, FILTER_VALIDATE_URL)){
            echo("$url is a valid URL");
        }
    ?>
</body>
</html>