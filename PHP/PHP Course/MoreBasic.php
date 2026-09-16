<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 80%;
            background-color: grey;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Let's learn about php</h1>
        <p>Your party status is here:</p>
        <?php
        // $age = 108;

        // 1. Sabse pehle range check karein (Invalid cases)
        // if ($age < 5 || $age > 100) {
        //     echo "Please enter a valid age";
        // }
        // // 2. Phir valid ages ke liye party condition check karein
        // else if ($age >= 18) {
        //     echo "You can go to the party";
        // }
        // // 3. Baki sab (5 se 17 saal tak)
        // else {
        //     echo "You can not go to the party";
        // }
        // echo "<br><br>";

        // $language = array("python", "java script", "c++");
        // echo count($language); // 3
        // echo "<br>";
            
        // echo $language[1];
        // echo "<br>";

        // Loops in php
        // While loop
        // $a = 0;
        // while ($a <=5){
        //     echo "The value of a is: " . $a . "<br>";
        //     $a++;
        // }

        // Do while loop
        // $b = 20;
        // do {
        //     echo "The value of b is: " . $b ."<br>";
        //     $b++;
        // }
        // while ($b <= 5);

        // For loop
        // for ($i=0; $i <= 5; $i++){
        //     echo "The value of i is: ".$i. "<br>";
        // }

        // Foreach loop
        // foreach($language as $value){
        //     echo "The value is: ". $value. "<br>";
        // }

        // Function in php
        function print5(int $n){
            echo $n."<br>";
        }
        print5(5);
        print5(5);
        print5(5);
        print5(5);
        ?>


    </div>
</body>

</html>