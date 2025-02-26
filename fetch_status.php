<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");

header('Content-Type: application/json'); // Set response type to JSON

// Database configuration
$servername = "sql12.freesqldatabase.com";
$username = "sql12764753";
$password = "UyLakNrJuL";
$dbname = "sql12764753";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    // Instead of terminating script, return an error message in JSON format
    echo json_encode(["error" => "Connection failed: " . $conn->connect_error]);
    exit;
}

// Fetch status for zones with "Fire" status
$sql = "SELECT zone_name, status FROM status WHERE status = 'Fire'";

// Execute the query
$result = $conn->query($sql);

$statusData = [];

if ($result) {
    if ($result->num_rows > 0) {
        // Fetch results
        while ($row = $result->fetch_assoc()) {
            $statusData[$row['zone_name']] = $row['status'];
        }
    } else {
        // If no rows found, return a message
        $statusData = ["message" => "No zones are currently on fire."];
    }
} else {
    // Handle SQL query errors
    $statusData = ["error" => "Query execution failed: " . $conn->error];
}

// Close connection
$conn->close();

// Return the JSON response
echo json_encode($statusData);
?>
