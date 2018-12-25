<div class="content">
<link rel="stylesheet" href="styles/views.css">
<h1 class='catagory'>Update Catagory</h1> <hr class="hr">
<div class="add-cat">
<?php 
if(isset($_SESSION['up_suc'])){
	echo "You have successfully Update catagory";
}
if(isset($_SESSION['up_fail'])){
	echo "Something went wrong";
}
?>
<form action="http://localhost/real-project/mvc/?url=catagory/updateCat" method="post">
	<table>
		<?php 
		if(isset($data)){
		foreach($data as $val){
		?>
		<input type="hidden" name="cat_id" value="<?php echo $val['cat_id'] ?>"> 
		<tr>
			<td>Catagory name</td>
			<td>:</td>
		<td><input type="text" value="<?php echo $val['cat_name'] ?>" name="name"></td>
		</tr>
		<tr>
			<td>Catagory title</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $val['cat_title'] ?>" name="title"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Update"></td>
		</tr>
	<?php } } ?>
	</table>
</form>
</div>
<?php 
// unset($_SESSION["delProCart"]);
// unset($_SESSION['up_suc']);
// unset($_SESSION['up_fail']);
?>