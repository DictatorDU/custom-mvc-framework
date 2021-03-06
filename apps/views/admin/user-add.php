<style>
	.important-content{
		margin-left: 10px;
	    float: right;
	    width: 740px;
	    border: 1px solid #555;
	    min-height: 331px;
	}
	.important-content .content{
		margin: 5px;
	}
	.important-content .content h2{
		color: #555;
        border-bottom: 1px dashed;
	}
	.important-content .content .add-catagory{
		margin: 0 auto;
	    margin-left: 30px;
	    margin-top: 40px;
	}
	.important-content .content .add-catagory .catagory{
		width: 310px;
	    height: 35px;
	    padding-left: 10px;
	    margin-bottom: 10px;
	}
	.important-content .content .add-catagory .title{
		width: 310px;
	    padding-left: 10px;
	    height: 35px;
	    margin-bottom: 10px;
	}	
	.important-content .content .add-catagory .level{
		width: 325px;
	    padding-left: 10px;
	    height: 35px;
	    margin-bottom: 10px;
	}
	.important-content .content .add-catagory input[type='submit']{
		padding: 5px 20px;
	    background: #fff;
	    border: 1px solid #444;
	    font-size: 20px;
	}

	.important-content .content .add-catagory input[type='submit']:hover{
	    background: #f1f1f1;
	}
</style>
<div class="important-content">
	<div class="content">
		<div class="add-catagory">
			<form action="<?php echo BASE_URL?>admin/user_add" method="post">
				<input type="text" name="name" class="catagory" placeholder="User Name"><br>
				<input type="text" name="email" class="title" placeholder="E-mail"><br>
				<input type="text" name="password" class="title" placeholder="Password"><br>
				<select name="level" id="" class="level">
					<option value="">Select Level</option>
					<option value="1">Admin</option>
					<option value="2">Author</option>
					<option value="3">Contributor</option>
				</select><br>
				<input type="submit" name="submit" value="Add User">
			</form>
		</div>
	</div>
</div>
