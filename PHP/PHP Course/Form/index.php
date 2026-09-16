<?php
    session_start();

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trip";

    $con = mysqli_connect($server, $username, $password, $dbname);

    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Jab form submit hoga sirf tabhi yeh block chalega
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ?? '';
        $age = $_POST['age'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $description = $_POST['description'] ?? '';

        $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES (?, ?, ?, ?, ?, ?, current_timestamp())";

        $stmt = $con->prepare($sql);
        
        // Age integer hai to "sissss" use karna perfect hai
        $stmt->bind_param("sissss", $name, $age, $gender, $email, $phone, $description);

        if ($stmt->execute() == true) {
            $_SESSION['status'] = "success";
        } else {
            $_SESSION['status'] = "error";
        }

        $stmt->close();
        $con->close(); // Form submit hone par connection yahan close ho gaya

        header("Location: index.php");
        exit();
    } else {
        // FIX: Agar form submit nahi hua hai, to connection yahan band hoga
        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="index.php" method="post">
        <div class="container">
            <h2>Welcome to Manali Trip Form</h2>
            
            <?php 
            if (isset($_SESSION['status']) && $_SESSION['status'] == "success") {
                echo '<p style="color: green; font-weight: bold; text-align: center;">Thank you! Your registration is confirmed.</p>';
                unset($_SESSION['status']); // Ek baar dikhane ke baad saaf kar do
            } else {
                echo '<p>Enter your details and submit this form to confirm your participation in the trip.</p>';
            }
            ?>

            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Enter your name" name="name" required>
            </div>

            <div class="input-group">
                <label for="age">Age:</label>
                <input type="number" id="age" placeholder="Enter your age" name="age" required>
            </div>

            <div class="input-group gender-group">
                <label>Gender:</label>
                <span class="radio-option">
                    <input type="radio" name="gender" value="male" id="male" required>
                    <label for="male">Male</label>
                </span>
                <span class="radio-option">
                    <input type="radio" name="gender" value="female" id="female">
                    <label for="female">Female</label>
                </span>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter your email" name="email" required>
            </div>

            <div class="input-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" placeholder="Enter your phone number" name="phone">
            </div>

            <div class="input-group">
                <label for="description">Additional Information:</label>
                <textarea name="description" id="description" placeholder="Enter any additional information"></textarea>
            </div>

            <div class="button-wrapper">
                <button class="button" type="submit">Submit</button>
                <button class="button" type="reset">Reset</button>
            </div>
        </div>
    </form>
    <script src="script.js"></script>

</body>
</html>