<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "db_file"; 
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $patientName = htmlspecialchars($_POST['patientName']);
    $age = (int)$_POST['age'];
    $doctor = htmlspecialchars($_POST['doctor']);
    $scheduleDate = $_POST['scheduleDate'];
    $scheduleTime = $_POST['scheduleTime'];

    $checkQuery = "SELECT * FROM appointments WHERE schedule_date = ? AND schedule_time = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $scheduleDate, $scheduleTime);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<script>
                alert("The selected date and time are already booked. Please choose another date or time.");
                window.location.href = "Appointment.html";
              </script>';
    } else {
        $insertQuery = "INSERT INTO appointments (patient_name, age, doctor, schedule_date, schedule_time) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sisss", $patientName, $age, $doctor, $scheduleDate, $scheduleTime);
        if ($stmt->execute()) {
            echo '<script>window.location.href = "Doctorappointment.html";</script>';
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();
}
?>
