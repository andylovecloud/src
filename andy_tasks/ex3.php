<?php
$title="Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>

<div class="container"> 
    <h2>3.2. Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname.
    Use the echo statement 
    to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag 
    </h2> 
    <form action="process.php" method="post" name="form1">
        <div class="mb-3">
            First Name: <input type="text" name="fname" required>
        </div>
        <div class="mb-3">
            Last Name: <input type="text" name="lname">
        </div>
        <div class="mb-3">
            Email: <input
            type="text"
            pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"
            required><br><br>
            
            DOB:  <input type="date" name="dob"><br><br>
            Select color: <input type="color" name="color"><br><br>
            <input type="submit" class="btn btn-outline-success"><br><br>
        </div>
    </form> <!--End of 3.2 -->

    <h2>3.4. HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. 
        If you wish, you can use the same table. </h2>
        <table border = 1>
            <tr><th>S.n</th> <th>Name</th> <th>Grade</th></tr>
            <tr>
                <td>1</td>
                <td>John</td> 
                <td>5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice</td> 
                <td>4</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bob</td> 
                <td>5</td>
            </tr>
        </table> 
        <!-- End of 3.4 -->

    <h2>3.5. Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string. 
    </h2>
        <?php 
        $str1 = "Hello";
        $str2 = "World";
        $str3 = $str1." ".$str2;

        // echo $str1." ".$str2;
        echo $str3; 
        echo "<br>"."The length of string $str1 + $str2 is: "."<h3>".strlen($str3)."</h3>"." chracters! (including space)";        
        ?>
    <!--End of 3.5 -->
    <h2>3.6. Number Addition: Write a script to add up the numbers: 298, 234, 46. 
        Use variables to store these numbers and an echo statement to output your answer.
    </h2> 
        <?php
        $number1 = 298;
        $number2 = 234;
        $number3 = 46;
        $sum_total = $number1 + $number2 + $number3;
        echo "The result of Add up $number1 + $number2 + $number3 is: "."<h3>".$sum_total."</h3>"."<br>";        
        
        ?>

    <!--End of 3.6 -->
    <br>
    <h2>3.7. Browser Detection: Write a PHP script to detect the browser being used to 
        view your pages. 
        Hint: Use predefined variables: $_SERVER. Predefined Variables
    </h2>
        <?php
            $browser = $_SERVER['HTTP_USER_AGENT'];
            echo "<p> You are using the browser ". $browser.".</p>";
            echo "<br>"
        ?>
    <!--End of 3.7 -->
    <h2> 3.8. Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , 
        filetime function to get the last modified time & date function to print the date and time
    </h2>
        <p> implemented as here -> <img src="../andy_tasks/Last-modified.png"></p>
    <?php

    echo "<br><br>"
    ?>
</div> <!-- End of container center for body content-->
    <br><br>
<?php 
include 'footer.php';
?>