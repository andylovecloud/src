<?php
$title="Exercise 4:  Control flow and loops";
include 'header.php'; ?>

<div class="container"> 
    <h4>4.2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting)
    </h4>
    <form method="post" action="CheckAge.php">
        Enter your name: <input type="text" name="name"><br><br>
        Enter your age: <input type="number" name="age"><br><br>
        <input type="submit" value="Submit" class="btn btn-outline-success">
    </form>
    <!-- End of 4.2-->
    
    <br>
    <h4>4.3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses,
        depending on whether it's August or not:
        It's August, so it's still holiday.
        Not August, this is Month-name so I don't have any holidays
            <i><p>Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</p></i>
    </h4>
        <?php
        // Get the current month name using the date() function
        $currentMonth = date('F');

        // Use a switch statement to display the appropriate message
        switch ($currentMonth) {
            case 'August':
                echo "It's August, so it's still holiday!";
                break;
            default:
                echo "Not August, this is $currentMonth so I don't have any holidays.";
        }
        ?>
    <!-- End of 4.3-->

    <br>
    <h4>4.4. For Loop: Write a PHP script that will print the multiplication table of a number (n)</h4>
        <form method="post" action="ForLoop.php">
            Enter a number: <input type="number" name="number"><br><br>
            <input type="submit" value="Generate Table" class="btn btn-outline-success">
        </form>
        
    <!-- End of 4.4-->
    
    <br>
    <h4>4.5. While Loop: Write a PHP script that will print all the numbers from 1 to n </h4>
         <form method="post" action="WhileLoop.php">
            Enter the 'n' number: <input type="number" name="number"><br><br>
            <input type="submit" value="Submit" class="btn btn-outline-success">
        </form>
    <!-- End of 4.5-->

    <br>
    <h4>4.6. Foreach Loop: Write a PHP script that will print all the elements of an array. </h4>
        <?php
        echo "My array including: "."<br>";
        // Define an array with some elements
        $myArray = array("apple", "banana", "orange", "grape", "cherry");

        // Use a foreach loop to iterate through the array and print each element
        
        foreach ($myArray as $fruit) {
            echo $fruit . "<br>"; // Each element will be printed on a new line
        }
        ?>
    <!-- End of 4.6-->

</div> <!-- End of container center for body content-->
<?php
include 'footer.php';
?>