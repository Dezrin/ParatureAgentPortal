<?php
$servername = "localhost";
$username = "root";
$password = "07Bustertara1";
$dbname = "parature_fixes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Subject, Customers_issues, Customers_software, Customers_OS, Notes FROM fixes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Ticket #: " . $row["Subject"]. " - Customers Issues: " . $row["Customers_issues"]. " - Customers Software: " . $row["Customers_software"]. " - Customers OS" . $row["Customers_OS"] .  " - Resolution" . $row["Notes"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>