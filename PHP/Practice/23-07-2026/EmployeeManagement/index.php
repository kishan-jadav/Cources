<?php
include 'db.php';

if (isset($_POST['submit'])):
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];

    $insert_query = "INSERT INTO employee 
                        (name, surname, city, contact, email, dob, age)
                    VALUES 
                        ('$name', '$surname', '$city', '$contact', '$email', '$dob', '$age')";

    if (mysqli_query($connect, $insert_query)):
        header("Location: index.php");
    else:
        echo "Error: " . mysqli_error($connect);
    endif;

endif;

// Handle AJAX search request
if (isset($_GET['ajax']) && $_GET['ajax'] == 1 && isset($_GET['search'])) {
    $search = mysqli_real_escape_string($connect, $_GET['search']);
    $search_query = "SELECT * FROM employee WHERE 
                        name LIKE '%$search%' OR 
                        surname LIKE '%$search%' OR 
                        city LIKE '%$search%' OR 
                        contact LIKE '%$search%' OR 
                        email LIKE '%$search%'
                        ";
    $result = mysqli_query($connect, $search_query);

    while ($row = mysqli_fetch_assoc($result)):
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['contact'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['dob'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>
                <a href='edit.php?id=" . $row['id'] . "'>Edit</a> |
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
            </td>";
        echo "</tr>";
    endwhile;
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="input">
        <h2>Employee Management</h2>


        <form method="POST" action="">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" size="30" required><br><br>

            <label for="surname" required>Surname: </label>
            <input type="text" name="surname" id="surname"><br><br>

            <label for="city">City: </label>
            <input type="text" name="city" id="city"><br><br>

            <label for="contact">Contact No: </label>
            <input type="tel" name="contact" pattern="[0-9]{10}" inputmode="numeric" min="10" maxlength="10" required><br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="dob">DOB: </label>
            <input type="date" name="dob" id="dob" required><br><br>

            <label for="age">Age: </label>
            <input type="number" name="age" id="age" min="18" max="80" inputmode="numeric" required><br><br>

            <input class="button" type="submit" name="submit" value="Submit">
            <input class="button" type="reset" name="reset">
        </form>
    </div>
    <br><br>
    <div class="output">
        <h2>Employees List</h2>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="search employee here" onkeyup="searchEmployees()">
        </div>

        <table border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>City</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="employeeTableBody">

                <?php
                $view_query = "SELECT * FROM employee";
                $result = mysqli_query($connect, $view_query);

                while ($row = mysqli_fetch_assoc($result)):
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['surname'] . "</td>";
                    echo "<td>" . $row['city'] . "</td>";
                    echo "<td>" . $row['contact'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['dob'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>
                <a href='edit.php?id=" . $row['id'] . "'>Edit</a> |
                <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
            </td>";
                    echo "</tr>";
                endwhile;

                ?>

            </tbody>
        </table>
    </div>

    <script>
        function searchEmployees() {
            var input = document.getElementById("searchInput");
            var searchValue = input.value.trim();
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("employeeTableBody").innerHTML = this.responseText;
                }
            };

            xhttp.open("GET", "index.php?ajax=1&search=" + encodeURIComponent(searchValue), true);
            xhttp.send();
        }
    </script>

</body>

</html>