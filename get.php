<?php


// connect the database with the server
$conn = new mysqli("208.91.198.197:3306", "Phasor", "admin@12345!", "Phasor");

// if error occurs 
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$course_data = "select * from courses";
$course_result = ($conn->query($course_data));
//declare array to store the data of database
$course = [];

if ($course_result->num_rows > 0) {
    // fetch all data from db into array 
    $course = $course_result->fetch_all(MYSQLI_ASSOC);
}


$banner_data = "select * from banners";
$banner_result = ($conn->query($banner_data));
//declare array to store the data of database
$banner = [];

if ($banner_result->num_rows > 0) {
    // fetch all data from db into array 
    $banner = $banner_result->fetch_all(MYSQLI_ASSOC);
}


$faculty_data = "select * from faculty";
$faculty_result = ($conn->query($faculty_data));
//declare array to store the data of database
$faculty = [];

if ($faculty_result->num_rows > 0) {
    // fetch all data from db into array 
    $faculty = $faculty_result->fetch_all(MYSQLI_ASSOC);
}


$testimonial_data = "select * from testimonials";
$testimonial_result = ($conn->query($testimonial_data));
//declare array to store the data of database
$testimonial = [];

if ($testimonial_result->num_rows > 0) {
    // fetch all data from db into array 
    $testimonial = $testimonial_result->fetch_all(MYSQLI_ASSOC);
}


$gallery_data = "select * from gallery";
$gallery_result = ($conn->query($gallery_data));
//declare array to store the data of database
$gallery = [];

if ($gallery_result->num_rows > 0) {
    // fetch all data from db into array 
    $gallery = $gallery_result->fetch_all(MYSQLI_ASSOC);
}
?>





<?php
mysqli_close($conn);
?>