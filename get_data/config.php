<?php


// connect the database with the server
// $conn = new mysqli("208.91.198.197:3306", "Phasor", "admin@12345!", "Phasor");

$conn = new mysqli("162.214.80.31", "idgvhtmy_admin", "#Lz*(+oaExW%", "idgvhtmy_phasor");
// if error occurs 
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
?>
