<div class="content">
<link rel="stylesheet" href="styles/views.css">
<h1 class='catagory'>Add Catagory</h1> <hr class="hr">
<div class="add-cat">
<?php 
if(isset($_SESSION['in_suc'])){
	echo "You have successfully added catagory";
}
if(isset($_SESSION['in_fail'])){
	echo "Something went wrong";
}
?>
<form action="http://localhost/real-project/mvc/?url=catagory/insertCat" method="post">
	<table>
		<tr>
			<td>Catagory name</td>
			<td>:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Catagory title</td>
			<td>:</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</div>