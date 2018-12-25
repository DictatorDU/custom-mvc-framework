<style>
	.add-post {
	width: 745px;
	float: right;
}
	.add-post table{}
	.add-post table tr{
	 margin-bottom: 10px;
	}
	.add-post table tr td{}
	.add-post table tr td input[type="text"] {
	width: 578px;
	height: 35px;
	border: 1px solid #444;
	padding-left: 10px;
	margin-left: 10px;
	margin-bottom: 15px;
}
	.add-post table tr td .txt{
	margin-bottom: 15px;
	margin-left: 10px;
	}
	.add-post table tr td select {
	width: 590px;
	height: 35px;
	padding-left: 10px;
	margin-left: 10px;
	border: 1px solid #333;
	margin-bottom: 15px;
}
	.add-post table tr td select option{}
	.add-post table tr td input[type="submit"] {
	padding: 10px 20px;
	background: #fff;
	border: 1px solid #555;
	margin-left: 10px;
	cursor: pointer;
}
    .add-post table tr td input[type="submit"]:hover{
    	background: #f1f1f1;
    }
</style>
<script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<div class="add-post">
	<form action="<?php echo BASE_URL?>admin/insert_post" method="post">
		<table>
			<input type="hidden" name="level" value="<?php echo session::get("level");?>">
			<div id="tr">
			<tr>
				<td>Post Title</td>
				<td>:</td>
				<td><input type="text" name="title"></td>
			</tr>
			</div>
			<div class="tr">
			<tr>
				<td>Catagory</td>
				<td>:</td>
				<td>
					<select name="catagory" id="">
						<option value="">Select Catagory</option>
						<?php
						if(isset($data)){
							foreach($data['readCat'] as $value){
						?>
						<option value="<?php echo $value['cat_id'];?>"><?php echo $value['cat_name'];?></option>
					    <?php } } ?>
					</select>
				</td>
			</tr>
			</div>
			<div class="tr">
			<tr>
				<td>Post</td>
				<td>:</td>
				<td><div class="txt"><textarea name="post" id="editor1" cols="50" name="post" rows="4"></textarea></div></td>
			</tr>
			</div>
			<div class="tr">
			<tr>
				<td>Tag</td>
				<td>:</td>
				<td><input type="text" name="tag"></td>
			</tr>
		</div>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</div>
		<script>
			CKEDITOR.replace( 'editor1' );
		</script>
