<?php
//what to do with the form data
$title="Select data function";
include 'header.php'; ?>
<div class="container"> 
<?php 
    $query ="SELECT productName FROM products";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
<a href="../andy_tasks/ex3.php">
    <input type="button" value="Go Back" class="btn btn-outline-info"></a>
</div>
<?php
include 'footer.php';

?>