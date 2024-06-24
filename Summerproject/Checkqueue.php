<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_file";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    $data = [];
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>
