<?php
include 'header.php'; 
include("database.php");
include("filter-data.php");
?>
<form method="post">
<select name="filterProduct">
    <option value="productAsc"  <?php echo $_POST['filterProduct']=='productAsc'?'selected':''; ?>>Product Low to High</option>
    <option value="productDesc" <?php echo $_POST['filterProduct']=='productDesc'?'selected':''; ?>>Product High to Low</option>
</select>
<input type="submit" name="filter">
</form>


<?php
 include("display-data.php");
 include 'footer.php'; 
?>
