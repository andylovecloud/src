<?php
if(!empty($filterDataByCategory)) {
?>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>S.N</th>
        <th>Product</th>
        <th>Category</th>
    </tr>
<?php
foreach($filterDataByCategory as $filterData){
    $sn = 1;
?>
<tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $filterData['productName']?></td>
    <td><?php echo $filterData['category']?></td>
</tr>
<?php
$sn++; }
?>
</table>
<?php
}
?>