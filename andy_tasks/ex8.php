<?php
include("db.php");
include("filter-data.php");
include("get-category.php");
$title ='Filter News';
include 'header.php';  
?>
<div class="container">
<h2>Filter Your News Information as select below category:</h2>
    <form method="post">
    <select name="filterByCategory">
        <?php
          $getCategories = getCategory();
          foreach($getCategories as $category) {
        ?>
        <option value="<?php echo $category['category']; ?>" 
        <?php echo $_POST["filterByCategory"]==$category['category']?'selected':''; ?>>
        <?php echo $category['category']; ?>
        </option>
      <?php } ?>
    </select>
    <input type="submit" name="filter">
    </form>
</div>
<?php
 include("display-data.php"); 
 include 'footer.php'; 
 ?>