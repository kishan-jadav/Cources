<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
</head>

<body>
    <h2>Time</h2>
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br><br>

    <div>
        Some characters are commonly used for dates:
        <ul>
            <li>H - 24 hour formate in an hour(00 to 23)</li>
            <li>h - 12-hour format of an hour with leading zeros (01 to 12)</li>
            <li>i - Minutes with leading zeros (00 to 59)</li>
            <li>s - Seconds with leading zeros (00 to 59)</li>
            <li>a - Lowercase am/pm</li>
        </ul>
    </div>

    ----------------------------------------------------------------------------------------<br>

    <?php
    echo date("H : i");
    echo "<br>";

    echo date("h");
    echo "<br>";

    echo date("h : i : s a");
    echo "<br>";

    echo date("h:i:s a - d F, Y ");
    echo "<br>";

    echo date("M");
    echo "<br><br>";
    ?>

    ----------------------------------------------------------------------------------------

    <h3>mktime() Function</h3> <!--  returns the Unix timestamp for a date -->

    <?php
    // syntax: mktime(hour, minute, second, month, day, year)
    echo date("l", mktime(0, 0, 0, 8, 3, 2005));
    echo "<br>";
    echo date("l m-F-Y", mktime(0, 0, 0, 8, 3, 2005));   // output: Wednesday 08-August-2005
    echo "<br>";

    ?>

    ----------------------------------------------------------------------------------------

    <h3>time() Function</h3>    <!-- returns the current time as a Unix timestamp -->

    <?php
    echo time();    //Unix timestamp return kare.., 1 January 1970 to current time sudhini second value print kare
    echo "<br><br>";
    echo date('Y-m-d H:i:s');
    ?>
    <br>
    ----------------------------------------------------------------------------------------
    <?php
    echo "<h3>strtotime() function</h3>";   //converts an English textual datetime string into a Unix timestamp

    $d =  strtotime("10:30pm June 2 2026");
    echo "Date is " . date("Y-m-d h   :i:s", $d) . "<br>";
    $d = strtotime("now");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("+5 days");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("last Sunday");
    echo "Date is " . date("Y-m-d H:i:s", $d);
    ?>




</body>

</html>