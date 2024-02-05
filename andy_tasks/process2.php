<?php
//what to do with the form data
$title="Exercise 7: CRUD App";
include 'header.php'; ?>
<div class="container"> 
<?php

if(isset($_POST['submit'])) // isset is validating all fields should not empty before submit
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $groupid = $_POST["groupid"];

// connect to the database server
include 'db.php';

// write sql statement to insert data

$sql = "insert into studentsinfo(first_name,last_name,groupId,city)
        values ('$fname','$lname','$city','$groupid')";

// validation the insert result
    if ($conn->query($sql)===TRUE)
    {   
        echo "You data was recorded";
    }
    else
    {
        echo "Error: " .$sql."<br>".$conn->error;
    }

// close db connect
$conn->close();

}

?>
<a href="../andy_tasks/ex7.php">
    <input type="button" value="Go Back" class="btn btn-outline-info"></a>
</div>
<?php
include 'footer.php';

?>