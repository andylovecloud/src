<?php
$title ='Exercise 5 - Form validation';
include 'header.php';
 ?>

<div class="container">
<h2>Input Your Information Below:</h2>

<form action="" method="post">
    First Name <input type="text" name="fname" id="name" required><br>
        <span id="nameError"></span><br>
    Email: <input type ="email" name="email" id="email" required><br>
        <span id="emailError"></span><br>
    Password: <input type="password" name="password"  id="pw" required><br>
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

    // // function validateEmail()
    // function validateEmail()
    // {
    //     const email = document.getElementById("email").value;
    //     const emailError = document.getElementById("emailError");

    //     // if(email.length < 3 || email.length > 20)
    //     if (email === "" || !email.includes("@"))
    //     {
    //         emailError.innerHTML = "Name must be between 3 and 20 characters!";
    //         return false;
    //     }
    //     else
    //     {
    //         emailError.innerHTML = "";
    //         return true;
    //     }
    // } 
    function validateEmail() {
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        if (email === "" || !email.includes("@")) {
            emailError.innerHTML = "Email must contain @";
            return false;
        }
        else {
            emailError.innerHTML = "";
            return true;
        }
    }


    // {
    //     const emailadr = document.getElementById("emailadr".value);
    //     const emailError = document.getElementById("emailError");

    //     // if (email === "" || !email.contains("@"))
    //     if(emailadr.length < 3 || emailadr.length > 20)
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


    // function validatePassword()
    // {
    //     const password = document.getElementsById("pw").values;
    //     const passwordError = document.getElementById("passwordError");

    //     //write if statement password must have atleast 6 characters

    //     // if (password.length < 6)
    //     if(password.length < 3 || password.length > 20)
    //     {
    //         passwordError.innerHTML = "Your password must be atleast 6 characters !";
    //         return false;
    //     }
    //     else
    //     {
    //         passwordError.innerHTML = "";
    //         return true;
    //     }

    // }
    // function validateAge()
    // {
    //     const age=document.getElementById("age").value;
    // }

// event listeners for real time validation
document.getElementById("name").addEventListener("input",validateName);
document.getElementsById("email").addEventListener("input",validateEmail);
// document.getElementById("pw").addEventListener("input",validatePassword);
// document.getElementById("age").addEventListener("input",validateAge);

</script>


</div>
</body>
<?php include 'footer.php'; ?>

