<div class="home">
	<div class="home-content">
		<?php 
		if(isset($data)){
		foreach($data['post'] as $value){
		?>
		<div class="content">
			<h3><a href="<?php echo BASE_URL;?>index/post_details/<?php echo $value['post_id']?>"><?php echo $value['post_title']?></a></h3>
			<p><?php
			  $txt = $value['post'];
			  if(str_word_count($txt) > 50){
                 echo substr($txt, "0","200");
			  }
			 ?></p>
			<div class="read-more"><a href="<?php echo BASE_URL;?>index/post_details/<?php echo $value['post_id']?>">Read More</a></div>
		</div>
	    <?php } } ?>
	</div>

