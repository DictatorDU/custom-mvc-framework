<style>
	.important-content{
		margin-left: 10px;
	    float: right;
	    width: 740px;
	    min-height: 331px;
	}
	.important-content .content{
		
	}
	.important-content .content h2{
		color: #555;
        border-bottom: 1px dashed;
	}
	.important-content .content table{
		width: 745px;
	}
	.important-content .content table tbody tr{}
	.important-content .content table thead{
		background: #fff;
	}
	.important-content .content table thead tr th{
		padding: 7px;
	}
	.important-content .content table tr th{}
	.important-content .content table tbody tr td{
		text-align: center;
	    color: #333;
	    background: #C1D7BE;
	    padding: 5px;
	}
	.important-content .content table tbody tr td a{
		text-decoration: none;
		color:#333;
	}
</style>
<div class="important-content">
	<div class="content">
		<div class="catagory-list">
         <?php 
         $i = 0;
         
         if(isset($data)){ ?>
         <table>
         	<thead>
         	<tr>
         		<th>No.</th>
         		<th>Catagory Name</th>
         		<th>Catagory Title</th>
         		<th>Action</th>
         	</tr>
         	</thead>
         	<?php foreach($data['read_cat'] as $value){
         	 $i++;
         	?>
         	<tbody>
         	<tr>
         		<td><?php echo $i;?></td>
         		<td><?php echo $value['cat_name'];?></td>
         		<td><?php echo $value['cat_title'];?></td>
         		<td><a href="<?php echo BASE_URL?>admin/post_by_cat/<?php echo $value['cat_id'];?>">Post</a> || <a href="<?php echo BASE_URL?>admin/delet_cat/<?php echo $value['cat_id'];?>">Delete</a> || <a href="<?php echo BASE_URL?>admin/post_by_cat/<?php echo $value['cat_id'];?>">Edit</a></td>
         	</tr>
            </tbody>
         <?php } ?>
         </table>
       <?php } ?>
       </div>
	</div>
</div>
