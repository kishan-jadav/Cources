<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student list</title>
    <link rel="stylesheet" href="view.css">
</head>

<body>
    <img src="bg-image.png" alt="Background">
    <div>
        <h2>ALL STUDENTS DETAILS</h2>

        <hr>
        <br>
        <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search here...">
        <a id = "insert" href="index.php">Insert new student</a>
        <br><br>

        <!-- <input class="insert" type="button" href="index.php" value="Insert"> -->

        <table border="1" id="studentTable">
            <tr>
                <th>Roll </th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>DOB</th>
                <th>City</th>
                <th>Standard</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            $view_query = "SELECT * FROM student";
            $result = mysqli_query($connect, $view_query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['roll'] . "</td>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['middlename'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['standard'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td> <a href='update.php?roll=" . $row['roll'] . "'>Edit</a></td>";
                echo "<td> <a href='delete.php?roll=" . $row['roll'] . "'>Delete</a> </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <script>
        function searchTable() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let table = document.getElementById("studentTable");
            let tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let rowText = tr[i].textContent.toLowerCase();

                if (rowText.includes(input)) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>
</body>

</html>