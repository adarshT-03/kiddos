
<?php include './get_data/config.php'; ?>
<?php
$branch_data = "select * from branches";
$barnch_ = ($conn->query($branch_data));
//declare array to store the data of database
$branch = [];

if ($barnch_->num_rows > 0) {
    // fetch all data from db into array 
    $branch = $barnch_->fetch_all(MYSQLI_ASSOC);
}

?>