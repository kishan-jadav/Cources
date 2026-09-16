<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create and Write</title>
</head>
<body>
    <h2>Create and Write</h2>

    <?php
        echo "<h3>fopne() - It is also used to open a file. If the file does not exist, it creates a new one. </h3>";
        echo "<h3>fwrite() - write in opened file</h3>";
        $myfile = fopen("data.txt","w");
        echo fwrite($myfile,"Kishan Jadav \n");
        echo fwrite($myfile,"Shital Metaliya");
        fclose($myfile);
        
        

    ?>
</body>
</html>