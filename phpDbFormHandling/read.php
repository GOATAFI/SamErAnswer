<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>

<body>
    <h2>Human Records</h2>
    <table border="1">
        <tr>
            <!-- <th>ID</th> -->
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
        </tr>
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'test');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }

        // Perform SELECT query
        $sql = "SELECT firstName, lastName, age FROM human";
        $result = $conn->query($sql);

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["firstName"] . "</td>";
                echo "<td>" . $row["lastName"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
</body>

</html>
