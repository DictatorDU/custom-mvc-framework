<style>
	.post-list {
	width: 745px;
	float: right;
}
	.post-list table {
	width: 100%;
}
	.post-list table thead {
	background: #fff;
}
	.post-list table thead tr{}

	.post-list table thead tr th {
	padding: 5px;
}

	.post-list table tbody{}
	.post-list table tbody tr{}
	.post-list table tbody tr td {
	background: #c1d7be;
	padding: 5px;
	text-align: center;
}
	.post-list table tbody tr td a {
	text-decoration: none;
	color: #333;
}
</style>
<link rel="stylesheet" href="https:://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="post-list">
	<table id="table_id" class="display">
		<thead>
			<tr>
				<th width="5%">No.</th>
				<th width="50%">Post title</th>
				<th width="15%">Author</th>
				<th width="15%">Date</th>
				<th width="15%">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if(isset($data)){
				$i=0;
				if(isset($data['read_post'])){
				foreach($data['read_post'] as $value){
				$i++;
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $value['post_title'];?></td>
				<td><?php echo 'Foysal';?></td>
				<td>04-04-2018</td>
				<td><a href="<?php echo BASE_URL?>admin/view_post/<?php echo $value['post_id'];?>">View</a> || <a href="<?php echo BASE_URL?>admin/delete_post/<?php echo $value['post_id'];?>">Delete</a></td>
			</tr>
		<?php }  } ?>
	    <?php } ?>
		</tbody>
	</table>
</div>
<script>
	$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>