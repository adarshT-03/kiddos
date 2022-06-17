<?php
  
     
   // connect the database with the server
   $conn = new mysqli("208.91.198.197:3306","Phasor","admin@12345!","Phasor");
     
    // if error occurs 
    if ($conn -> connect_errno)
    {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
  
    $sql = "select * from courses";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>
<!--   -->
<?php   
    mysqli_close($conn);
?>