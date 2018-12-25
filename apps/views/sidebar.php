	<div class="sidebar">
		<div class="catagory">
			<h2>Catagory</h2>
			<ul class="">
				<?php 
				if(isset($data)){
					foreach($data['catagory'] as $value){
				?>
				<li><a href="<?php echo BASE_URL?>index/postByCatId/<?php echo $value['cat_id']?>"><?php echo $value['cat_name']?></a></li>
			<?php } } ?>
			</ul>
		</div>
		<div class="letest">
			<h2>Letest Post</h2>
			<ul class="">
				<?php
				if(isset($data)){					
				foreach($data['letestPost'] as $value){
				?>
				<li><a href="<?php echo BASE_URL;?>index/post_details/<?php echo $value['post_id']?>"><?php echo $value['post_title'] ?></a></li>
			<?php } } ?>
			</ul>
		</div>
	</div>
</div>