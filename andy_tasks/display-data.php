<?php
if(!empty($filterProductData)) {
?>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>S.N</th>
        <th>Product</th>
        <th>id</th>
    </tr>
<?php
foreach($filterProductData as $filterData){
    $sn = 1;
?>
<tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $filterData['productName']?></td>
    <td><?php echo $filterData['id']?></td>
</tr>
<?php
$sn++; }
?>

</table>
<?php
}

?>