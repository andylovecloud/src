<?php
include("db.php");
include 'header.php';  
?>
<div class="container">
    <h1>Filter Products</h1>
    <form action="range.php" method="POST">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="">All</option>
            <option value="Travel">Travel</option>
            <option value="Business">Business</option>
            <option value="Technology">Technology</option>
        </select>
        <br>
        <button type="submit">Filter</button>
    </form>
    </div>
<?php
 include 'footer.php'; 
 ?>
