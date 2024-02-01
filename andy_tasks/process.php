<?php
//what to do with the form data
$title="Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>
<div class="container"> 
<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$DOB = $_POST["dob"];
$color= $_POST["color"];

echo "Hello <h4>".$fname." ".$lname."</h4><br>";
echo "Your Email: <h4>".$email.".</h4><br>";
echo "Your Date of birth: <h4>".$DOB."</h4><br>";
echo "Your selected color is: <h4>".$color."</h4><br>";
echo "<h4>You are welcome to my site. </h4>";
?>
<a href="../andy_tasks/ex3.php">
    <input type="button" value="Go Back" class="btn btn-outline-info"></a>
</div>
<?php
include 'footer.php';

?>