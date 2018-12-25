<style>
	.view-post {
	width: 745px;
	float: right;
}
	.view-post h3{}
	.view-post h4{}
	.view-post .date {
	padding-bottom: 10px;
}
	.view-post .post {
	color: #555;
	line-height: 1.3;
	font-size: 17px;
	text-align: justify;
}
</style>
<div class="view-post">
	<?php 
	if(isset($data)){
	foreach($data['view_post'] as $value){
	?>
   <h3>Foysal</h3>
   <h4><?php echo $value["post_title"];?></h4>
   <p class="date">April,5,2018</p>
   <p class="post"><?php echo $value["post"];?></p>
<?php } } ?>
</div>