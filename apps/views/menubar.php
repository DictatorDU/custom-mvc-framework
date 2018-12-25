<style>
	.menubar{
	    margin-top: -5px;
	    margin-bottom: 21px;
	    height: 21px;
	}
	.menubar .left{
		width: 200px;
	    float: left;
	}

   .menubar .left .btn{
   	margin-top: 1px;
    border: 1px solid #333;
    padding: 8px 7px;
    display: inline;
    padding-bottom: 5px;
    background: #fff;
   }
	.menubar .left a{
	    text-decoration: none;
	    color:#333;
	    display: inline;
	    cursor: pointer;
	    font-size: 25px;
	}
	.menubar .left .btn:hover{
	    background: #f1f1f1;
	    color: #333;
	}

	.menubar .right{
		width: 700px;
		float: right;
		margin-top: 3px;
	}

	.menubar .right .search{
		float: right;
	}
	.menubar .right input[type="text"]{
	    float: left;
	    padding: 5px;
	    margin-right: 10px;
	    width: 210px;
	}
	.menubar .right input[type="submit"]{
		background: #fff;
	    border: 1px solid #333;
	    padding: 5px 10px;
	    cursor: pointer;
	    transition: all .25s;
	}
	.menubar .right input[type="submit"]:hover{
	   background: #f1f1f1;
       color: #333;
	}
	.menubar .right select{
	    padding: 5px;
	    width: 210px;
	    margin-right: 5px;
	}
	.menubar .right select option{}
</style>
<div class="menubar">
	<div class="left">
		<div class="btn">
			<a href="<?php echo BASE_URL?>">Home</a>
		</div>
	</div>
	<div class="right">
		<div class="search">
		<form action="<?php echo BASE_URL?>index/search" method="post">
			<input type="text" name="keyword" placeholder="Keyword">
			<select name="catagory" id="">
				<option value="">Select Catagory</option>
				<?php 
				if(isset($data)){
					if(isset($data['catagory'])){
					foreach($data['catagory'] as $value){
				?>
				<option value="<?php echo $value['cat_id']?>"><?php echo $value['cat_name']?></option>
			<?php } } } ?>
			</select>
			<input type="submit" name="search" value="Search">
		</form>
	  </div>
	</div>
</div>
<hr style='margin-bottom:5px;'>
<div class="content">