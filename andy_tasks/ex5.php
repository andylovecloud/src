<?php
$title ='Exercise 5 - Form validation';
include 'header.php'; ?>

<div class="container">
<h2>Input Your Information Below:</h2>
<!-- <form name="form1" method="post" action="process2.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required minlength="3">
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required maxlength="10">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <!-- <?php include "read.php" ;?> -->
    <br>
    <!-- <?php include "read-news.php" ;?> -->
    <br>
    <!-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
</form> 
<br>

<form action="" method="post">
    First Name <input type="text" name="fname" required minlength="3" id="name"><br>
        <span id="nameError"></span><br>
    Email: <input type ="email" name="email" required id="email"><br>
        <span id="emailError"></span><br>
    Password: <input type="password" name="password" required id="password"><br>
        <span id="passwordError"></span><br>
    Age: <input type="number" name="age" min ="18" max="100" id="age"><br>
        <span id="ageError"></span>
    
    <br>    <button type="submit" name="regSub">submit</button>
</form>

<script>
    // function to validate name
    function validateName()
    {
        const name = document.getElementById("name").value;
        const nameError = document.getElementById("nameError");

        if(name.length < 3 || name.length > 20)
        {
            nameError.innerHTML = "Name must be between 3 and 20 characters!";
            return false;
        }
        else
        {
            nameError.innerHTML = "";
            return true;
        }
    } 

    // function validateEmail()
    // {
    //     const email = document.getElementById("email".value);
    //     const emailError = document.getElementById("emailError");

    //     if (email === "" || !email.includes("@"))
    //     {
    //         emailError.innerHTML = "Please input the valid email address !";
    //         return false;
    //     }
    //     else
    //     {
    //         emailError.innerHTML = "";
    //         return true;
    //     }
    // }


    function validatePassword()
    {
        const password = document.getElementsById("password").values;
        const passwordError = document.getElementById("passwordError");

        //write if statement password must have atleast 6 characters

        if (password.length <6)
        {
            passwordError.innerHTML = "Your password must be atleast 6 characters !";
            return false;

        }
        else
        {
            passwordError.innerHTML = "";
            return true;
        }

    }
    // function validateAge()
    // {
    //     const age=document.getElementById("age").value;
    // }

// event listeners for real time validation
document.getElementById("name").addEventListener("input",validateName);
// document.getElementsById("email").addEventListener("input",validateEmail);
document.getElementById("password").addEventListener("input",validatePassword);
// document.getElementById("age").addEventListener("input",validateAge);

</script>


</div>
</body>
<?php include 'footer.php'; ?>

