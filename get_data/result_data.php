<?php include './get_data/config.php'; ?>
<?php

$result_data = "select * from images2";
$rseult_ = ($conn->query($result_data));
//declare array to store the data of database
$result = [];

if ($rseult_->num_rows > 0) {
    // fetch all data from db into array 
    $result = $rseult_->fetch_all(MYSQLI_ASSOC);
}
?> 