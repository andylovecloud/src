<?php
require_once 'db.php';
// require_once 'products.php';
require_once 'news.php';
// Handle form submission
if (isset($_POST['submit'])) {
   
    $news_categoryId = $_POST['news_categoryId'];

    $news = new News($conn);
    $filteredNews = $news->filterNewsByCategory($conn, $news_categoryId);
} else {
    // Set default value range
    $news_categoryId = '';

    // Display all products initially
    $filteredNews = [];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Filter</title>
</head>
<body>

<h2>News Filter by category</h2>

<!-- <form method="post">
    <!-- <label>Min Price:</label> -->
    <!-- <input type="number" name="minPrice" value="<?=$minPrice; ?>" min="0">

    <label>Max Price:</label>
    <input type="number" name="maxPrice" value="<?=$maxPrice; ?>" min="0"> -->
<!-- 
    <label for="groupid">News Category:</label>
                <select class="form-control" id="groupid" name="news_categoryId">
                    <option value="1">Travel</option>
                    <option value="2">Business</option>
                    <option value="3">Technology</option>
    </select> -->
    
    <?php include_once '10.php'?>
    <input type="submit" value="Filter" name="submit">
</form>

<br></br>
<table border="1" cellspacing="0" cellpadding="5" width="42%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created in</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // Display filtered products in a table
    foreach ($filteredNews as $news) {
        echo "<tr>
                <td>{$news['title']}</td>
                <td>{$news['news_desc']}</td>
                <td>{$news['image']}</td>
                <td>{$news['create_date']}</td>
                <td>{$news['news_categoryId']}</td>
            </tr>";
    }
    ?>
    </tbody>
</table>

</body>
</html>