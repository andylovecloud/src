<?php
//what to do with the form data
$title="Exercise 4:  Control flow and loops";
include 'header.php'; ?>
<div class="container">     
    <?php
        // Get the input number from the user
        $n = $_POST["number"];

        // Print the multiplication table using a for loop
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$n</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>" . $n * $i . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    ?>
    <br>
    <a href="../andy_tasks/ex4.php">
        <input type="button" value="Go Back" class="btn btn-outline-info">
    </a>
</div>
<?php
include 'footer.php';
?>