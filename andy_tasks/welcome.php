<?php
//what to do with the form data
$title="Exercise 3: Variable, Strings & Operators";
include 'header.php';

echo "Welcome".<?php echo $_POST["name"]; ?>
Your email address is: <?php echo $_POST["email"]; ?>

include 'footer.php';
?>