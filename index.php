<?php
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

header('Content-Type: application/json');

$sql = "SELECT * FROM updates";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "Type: " . $row["type"] . ", Name: " . $row["name"] . ", Text: " . $row["text"] . ", Date: " . $row["date"] . "\n";
    }
} else {
    echo "No results found.";
}

$conn->close();


?>
