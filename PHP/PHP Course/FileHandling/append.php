<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Append Mode</title>
    <h2>Append Mode </h2>
</head>
<body>
    <?php 
        $myfile = fopen("append.txt","r+");
        fwrite($myfile,"Kishan Jadav");
        // echo fread($myfile,"10");
        fclose($myfile);
        readfile("append.txt");
    ?>
</body>
</html>