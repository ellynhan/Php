<!DOCTYPE html>
<html>
<body>
<?php
    $conn = mysqli_connect("hostname", "username", "password", "databasename");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("SELECT NAME, STUDENTID FROM Student");

    if ($result->num_rows > 0) {
     // output data of each row
        while ($row = $result->fetch_assoc()) { //or fetch_array()
            echo "<br> id: " . $row["STUDENTID"] . " - Name: " . $row["NAME"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>
</body>
</html>
