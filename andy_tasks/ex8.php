<?php 
$title ='Exercise 1 - Andy Huynh';
include 'header.php'; ?>

<div class="container">
<h2>Select the news you would like to show in below:</h2>
<form name="form1" method="post" action="getNews.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="groupid">Kind of news:</label>
                <select class="form-control" id="newsid" name="newsid">
                    <option value="1">Travel</option>
                    <option value="2">Business</option>
                    <option value="3">Technology</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Search</button>
</form>
</div>
</body>
<?php include 'footer.php'; ?>

