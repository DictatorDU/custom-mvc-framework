<div class="home">
	<div class="details-content">
		<div class="content">
			<?php 
			if(isset($data)){
				foreach($data['post'] as $value){
			?>
			<h3><?php echo $value['post_title']?></h3>
			<p class="cat">Catagory: <a href="<?php echo BASE_URL?>index/postByCatId/<?php echo $value['cat_id']?>"><?php echo $value['cat_name']?></a></p>
			<p><?php echo $value['post']?></p>
		<?php } }?>
		</div>
	</div>

