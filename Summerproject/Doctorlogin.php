<?php
session_start();

$servername = "localhost";
$username = "your_username"; 
$password = "your_password"; 
$dbname = "db_file";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doc_username = $_POST['doc_username'];
    $doc_password = $_POST['doc_password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM doctors WHERE  doctor_email= ? AND doctor_password = ?");
    $stmt->bind_param("ss", $doc_username, $doc_password);
    
    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any rows returned
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $doc_username;
        header("Location: Doctorpage.html");
        exit();
    } else {
        echo "Invalid username or password";
    }

    // Close the statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
