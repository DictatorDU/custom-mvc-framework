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
         		<th>User Name</th>
         		<th>E-mail</th>
         		<th>Level</th>
         		<th width="20%">Action</th>
         	</tr>
         	</thead>
         	<?php foreach($data['read_user'] as $value){
         	 $i++;
         	?>
         	<tbody>
         	<tr>
         		<td><?php echo $i;?></td>
         		<td><?php echo $value['name'];?></td>
         		<td><?php echo $value['email'];?></td>
         		<td><?php 
         		if($value['level'] == 1){
         			echo "Admin";
         		}elseif($value['level'] == 2){
         			echo "Author";
         		}elseif($value['level'] == 3){
         			echo "Contributor";
         		}
         		
         		?></td>
         		<td><a href="<?php echo BASE_URL?>admin/post_by_user/<?php echo $value['user_id'];?>">Post</a> || <a href="<?php echo BASE_URL?>admin/delet_user/<?php echo $value['user_id'];?>">Delete</a> || <a href="<?php echo BASE_URL?>admin/edit_user/<?php echo $value['user_id'];?>">Edit</a></td>
         	</tr>
            </tbody>
         <?php } ?>
         </table>
       <?php } ?>
       </div>
	</div>
</div>
