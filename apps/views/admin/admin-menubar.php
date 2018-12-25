<style>
	.menubar{
		margin-top: -5px;
	    margin-bottom: 17px;
	    height: 21px;
	}
	.menubar .left{
		width: 800px;
	    float: left;
	}
	.menubar .left h2{
	    border: 1px solid #777;
	    display: inline;
	    padding: 3px 10px;
	    background: #fff;
	    cursor: pointer;
	}
	.menubar .left h2 a{
	    text-decoration: none;
	    color:#333;
	    display: inline;
	    cursor: pointer;
	}
	.menubar .left h2:hover{
	    background: #f1f1f1;
	    color: #333;
	}

	.menubar .right{
	    width: 00px;
	    float: right;
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
		<h2><a href="<?php echo BASE_URL?>admin">Dashboard</a></h2>
		<h2><a href="<?php echo BASE_URL?>admin/logout">Logout</a></h2>
	</div>
</div>
<hr style='margin-bottom:5px;'>
