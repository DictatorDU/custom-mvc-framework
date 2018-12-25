<div class="content">
<h1 class='catagory'>Catagory List</h1> <hr class="hr">
<style>
	a{text-decoration: none;color:#555;}
</style>

<?php 
if(isset($data)){
foreach($data as $value){ ?>
    <a href="catagory_id=<?php echo $value['cat_id'];?>"><?php echo $value['cat_name'];?><br></a>
<?php } } ?>

