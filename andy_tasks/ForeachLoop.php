<?php
//what to do with the form data
$title="Exercise 4:  Control flow and loops";
include 'header.php'; ?>
<div class="container">     
    <?php
    // Get the input array from the user
    $array = $_POST["array"];

    // Print the elements using a foreach loop
    foreach ($array as $item) {
    echo $item."\n";
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