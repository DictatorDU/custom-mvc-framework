<div class="content">
<style>
	.dashboard{}
	.dashboard .left{
		width: 217px;
	    float: left;
	}
	.dashboard .left .menu{
	    margin-bottom: 10px;
	    border-left: 1px solid #888;
	    border-top: 1px solid #888;
	    border-right: 1px solid #888;
	}
	.dashboard .left .menu h2{
		background: #007BFF;
	    color: #fff;
	    padding: 5px;
	    text-align: center;
	}
	.dashboard .left .menu h4{
		border-bottom: 1px solid #777;
	}
	.dashboard .left .menu h4 a{
		background: #fff;
	    display: block;
	    font-size: 21px;
	    text-decoration: none;
	    text-align: center;
	    transition: all .25s;
	    color: #333;
	}
	.dashboard .left .menu h4 a:hover{
		background: #e6dede;
	}

	.dashboard .right{}
</style>
<div class="dashboard">
	<div class="left">
		<div class="menu">
			<h2>Post</h2>
			<h4><a href="<?php echo BASE_URL?>admin/post_list">Post List</a></h4>
			<h4><a href="<?php echo BASE_URL?>admin/add_post">Add post</a></h4>
		</div>
		<div class="menu">
			<h2>Catagory</h2>
			<h4><a href="<?php echo BASE_URL?>admin/catagory_list">Catagory List</a></h4>
			<h4><a href="<?php echo BASE_URL?>admin/add_catagory">Add Catagory</a></h4>
		</div>	
		<?php if(session::get("level") == '1'){ ?>
		<div class="menu">
			<h2>User customize</h2>
			<h4><a href="<?php echo BASE_URL?>admin/user_list">User List</a></h4>
			<h4><a href="<?php echo BASE_URL?>admin/add_user">Add User</a></h4>
		</div>
	    <?php } ?>
	</div>
	<div class="right">
		
	</div>
</div>
