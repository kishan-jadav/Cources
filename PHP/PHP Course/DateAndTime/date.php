<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date </title>
    <h2> Date </h2>
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br><br>
</head>
<body>
    <strong> mostly "/", ".", "-" are use in between the formate parameter </strong><br><br>

    <div>
    Some characters are commonly used for dates:
    <ul>
        <li>d - represent the date of the month(01 to 31)</li>
        <li>j - represent the date of the month(1 to 31)</li>
        <li>m - represent a month(01 to 12)</li>
        <li>y - represent a year(in two digits)</li>
        <li>Y - represent a year(in four digits)</li>
        <li>l - kyo vaar che te print kare </li>
        <li>F - represent the month in word</li>
    </ul>
    </div>
----------------------------------------------------------------------------------------<br>
    <?php 
        echo "Current Date: 02/07/2026 <br><br>";
        echo date("d/m/y"); // output: 02/07/26
        echo "<br>";
        echo date("d.m.y");  // output: 02.07.26
        echo "<br>";
        echo date("d-m-y"); //output: 02-07-26
        echo "<br>______________________________________<br>";


        echo date("y/m/d");     // output: 26/07/02
        echo "<br>";

        echo date("j");     // output: 2
        echo "<br>";

        echo date("m");     // output: 07
        echo "<br>";

        echo date("y");     // output: 26
        echo "<br>";
        
        echo date("l");     // output: Thursday
        echo "<br>";
        
        echo date("F");     // output: July
        echo "<br>";
        
        echo date("d F,Y");     // output: 02 July, 2026
        echo "<br><br>";
        
        echo "Today is " . date("l d F, Y") . "<br><br><br>";



        
        
        ?>

        &copy; <?php echo date("Y"); ?><br><br><br>

       <h3>date_default_timezone_get() Function</h3>    <!-- sets the default timezone to be used -->
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>
        <?php 
            echo date("d-m-Y");
            echo "<br><br><br>";
            echo date_default_timezone_get();   //output: Asia/Kolkata
            echo "<br><br>";

        echo "<h3>date_default_timezone_set() Function</h3>";   //gets the default timezone
        echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";


            echo "India Time zone is : " . date_default_timezone_set("Asia/Kolkata");   // 1 = True, otherwise blank
            echo "<br>";
            echo date("d-m-Y h:i:s");
            
        ?>


</body>
</html>