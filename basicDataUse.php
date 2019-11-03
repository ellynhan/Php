<!DOCTYPE html>
<html>
<body>
<?php
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
