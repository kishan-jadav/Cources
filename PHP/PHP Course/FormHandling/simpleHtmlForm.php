<!DOCTYPE html>
<html>
<body>

    <h2>Welcome Form</h2>

    <!-- Yahan hum PHP_SELF ka use kar rahe hain -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check kar rahe hain ki form POST method se submit hua hai ya nahi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Input se data collect karna
        $name = $_POST['username'];
        
        // Check karna ki field khali toh nahi
        if (empty($name)) {
            echo "<p style='color:red;'>Name is empty!</p>";
        } else {
            echo "<h3>Hello, " . $name . "!</h3>";
        }
    }
    ?>
</body>
</html>