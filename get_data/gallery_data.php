
<?php include './get_data/config.php'; ?>
<?php

$gallery_data = "select * from gallery";
$gallery_result = ($conn->query($gallery_data));
//declare array to store the data of database
$gallery = [];

if ($gallery_result->num_rows > 0) {
    // fetch all data from db into array 
    $gallery = $gallery_result->fetch_all(MYSQLI_ASSOC);
}
?> 