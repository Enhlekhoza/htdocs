<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faq_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; // Uncomment for debugging purposes only
} catch (PDOException $e) {
    // Log the error to a file or monitoring system
    error_log("Database connection error: " . $e->getMessage());
    // Show a generic error message to the user
    echo "An error occurred while connecting to the database.";
}
?>
