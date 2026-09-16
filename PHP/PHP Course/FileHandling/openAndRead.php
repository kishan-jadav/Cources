<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open and Read File</title>
</head>

<body>
    <h2>Open and Read File</h2>

    <h3>fopen() Function</h3>
    <p>Syntax: fopen("name","mode");</p>

    <h4>Modes List:</h4>
    <ul>
        <li>r - Read Only(file ne read karavva) </li>
        <li>r+ - Read/Write(old data ne preserved rakhe, teni jagyae replace thay)</li>
        <li>w - Write Only(file ma only write kari shakay)</li>
        <li>w+ - Read/Write(old data ne delete kari new data add kare)</li>
        <li>a - append(write only)(old data ne preserved rakhe and new data add kare)</li>
        <li>a+ - append(read/write)(old data ne preserved rakhe and new data add kare)</li>
        <li>x - write only(file exist na hoy to new file create kari write kare)</li>
        <li>x++ - read/write(file exist na hoy to new file create kare read/write kare.)</li>
    </ul>
-------------------------------------------------------
    <?php
    echo "<h3>fread() - Read from opened file </h3>";
    $file = fopen("demo.txt", "r");      // pela file open karvi read mode ma
    echo fread($file, " 50");     // ketla bytes sudhi read karvi che te value add karvi
    fclose($file);


    echo "<h3>fclose() - close opened file </h3>";
    $file = fopen("demo.txt","r");
    echo fclose($file);     // return 1(true) if file will closed otherwise give error
    

    echo "<h3>fgets() - read a single line of the opened file </h3>";
    $file = fopen("demo.txt","r");
    echo fgets($file);     // first single line read kare and next line par shift thy jaay
    echo "<br>";
    echo fgets($file);     // second line read kare and next line par shift thay
    
    echo "<h3>fgetc() - read a single character</h3>";
    $file = fopen("demo.txt","r");
    echo fgetc($file);      
    echo fgetc($file);      
    echo fgetc($file);     
    echo fgetc($file);     // second line read kare and next character par shift thay

    echo "<h3>feof() - file na end sudhi pointer pugyu che ke nahi te check kare.</h3>";
    $file = fopen("demo.txt","r") or die("Unable to open file");     // or die = file na hoy to error message show kare
    while(!feof($file)){    // file ma pointer last ma che ke nahi
        echo "<br>";        
        echo fgets($file);      // single line print and move to the next line
    }

    echo "<h3>readfile() - Open and Read file in browser(fastest way)</h3>";
    readfile("demo.txt");
    ?>

</body>

</html>