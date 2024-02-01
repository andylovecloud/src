<?php
//what to do with the form data
$title="Exercise 4:  Control flow and loops";
include 'header.php'; ?>
<div class="container">     
    <?php
    // Get the input number from the user
    $n = $_POST["number"];

    // Initialize a counter variable
    $i = 1;

    // Print the numbers using a while loop
    while ($i <= $n) {
    echo "$i ";
    $i++;
    }
    ?>
    <br>
    <a href="../andy_tasks/ex4.php">
        <input type="button" value="Go Back" class="btn btn-outline-info">
    </a>
</div>
<?php
include 'footer.php';
?>