<?php
	require 'db.php';
	if(ISSET($_GET['category'])){
		$category = ($_POST['category']);
		$query=mysqli_query($conn, "SELECT * FROM `news` WHERE  category ==  '$category'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['title']?></td>
		<td><?php echo $fetch['news_desc']?></td>
		<td><?php echo $fetch['image']?></td>
		<td><?php echo $fetch['create_date']?></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `news`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['firstname']?></td>
		<td><?php echo $fetch['lastname']?></td>
		<td><?php echo $fetch['project']?></td>
		<td><?php echo $fetch['date_submit']?></td>
	</tr>
<?php
		}
	}
?>