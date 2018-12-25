<?php 
/**
 * Load class
 */
class load{

	public function view($file_name,$data = NULL){
		include("apps/views/".$file_name.".php");
	}

	public function model($model_name){
		include("apps/models/".$model_name.".php");
		return new $model_name;
	}	
}
?>
