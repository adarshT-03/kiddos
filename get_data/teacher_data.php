
<?php include './get_data/config.php'; ?>
<?php

$faculty_data = "select * from faculty";
$faculty_result = ($conn->query($faculty_data));
//declare array to store the data of database
$faculty = [];

if ($faculty_result->num_rows > 0) {
    // fetch all data from db into array 
    $faculty = $faculty_result->fetch_all(MYSQLI_ASSOC);
}

?>