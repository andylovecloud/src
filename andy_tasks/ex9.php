<?php
include("database.php");
include("filter-data.php");
include("get-category.php");
?>
<form method="post">
<select name="filterByCategory">
    <?php
      $getCategories = getCategory();
      foreach($getCategories as $category) {
    ?>
    <option value="<?php echo $category['category']; ?>" <?php echo $_POST['filterByCategory']==$category['category']?'selected':''; ?>>
     <?php echo $category['category']; ?>
    </option>
  <?php } ?>
</select>
<input type="submit" name="filter">
</form>
<?php
 include("display-filtered-data.php");
 ?>