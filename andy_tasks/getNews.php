<?php
//what to do with the form data
$title="Get News information";
include 'header.php'; ?>
<div class="container"> 
<?php

if(isset($_POST['submit'])) // isset is validating all fields should not empty before submit
{
    $newsid = $_POST["newsid"];

// connect to the database server
include 'db.php';

// write sql statement to select data

$sql = "select * from news where id = $newsid";

// validation the insert result
    if ($conn->query($sql)===TRUE)
    {   
        echo "Your seleted data".$sql;
        
        "<form name="formNews">
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label value=""></label>
                    <label for="Newsid">News</label>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Search</button>
    </form>"
    }
    else
    {
        echo "Error: " .$sql."<br>".$conn->error;
    }

// close db connect
$conn->close();

}

?>
<a href="../andy_tasks/ex8.php">
    <input type="button" value="Go Back" class="btn btn-outline-info"></a>
</div>
<?php
include 'footer.php';

?>