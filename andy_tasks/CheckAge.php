<?php
//what to do with the form data
$title="Exercise 4:  Control flow and loops";
include 'header.php'; ?>

<div class="container"> 
    <?php
        // Get user input for name and age
        $name = $_POST["name"];
        $age = $_POST["age"];

        // Validate age input to ensure it's a numerical value
        if (!is_numeric($age)) {
        echo "Please enter a valid age (numeric value).";
        exit;
        }
        // Use an if-else statement to determine voting eligibility
        if ($age >= 18) {
        echo "Congratulations, $name! You are eligible to vote.";
        } else {
        echo "Sorry, $name. You are not eligible to vote yet.";
        }
    ?>
    <br>
    <a href="../andy_tasks/ex4.php">
        <input type="button" value="Go Back" class="btn btn-outline-info">
    </a>
</div> <!-- End of container center for body content-->
<?php
include 'footer.php';
?>