<?php
if(!empty($filterDataByCategory)) {
?>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Created in</th>
        <th>Group</th>
    </tr>
<?php
foreach($filterDataByCategory as $filterData){
    $sn = 1;
?>
<!-- <tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $filterData['title']?></td>
    <td><?php echo $filterData['category']?></td>
</tr> -->

    <tr>
        <td><?php echo $sn; ?></td>
        <td><?php echo $filterData['title']?></td>
        <td><?php echo $filterData['news_desc']?></td>
        <td><?php echo "<img class = 'img-fluid' src=".$filterData['image'].">"?></td>
        <td><?php echo $filterData['create_date']?></td>
        <td><?php echo $filterData['category']?></td>
    </tr>

<?php
$sn++; }
?>

</table>
<?php
}

?>