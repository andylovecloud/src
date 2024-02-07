<?php
include 'db.php';
include 'show-data.php';
?>
<select name="catergory_name">
   <option>Select Category</option>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['catergory_name']; ?> </option>
    <?php 
    }
   ?>
</select>