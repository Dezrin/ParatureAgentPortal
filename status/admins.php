<?php
$servername = "localhost";
$username = "root";
$password = "07Bustertara1";
$dbname = "parature_status";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT username, status, date FROM status";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<b>" . "Agent: " . "</b>" . $row["username"] . "<b>" . " " . "Status: " . "</b>" . $row["status"]. " " . $row["date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>