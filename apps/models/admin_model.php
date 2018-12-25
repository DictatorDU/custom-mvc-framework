<?php 
 /**
  * Admin controll model
  */
  class admin_model extends main_model{
 	
 	function __construct(){
 		parent::__construct();
 	}

 	public function insert_catagory($table,$catagory,$title){
		$sql = "INSERT INTO $table(cat_name,cat_title) VALUES(:catagory,:title)";
		$stmt = db::mvcPrepare($sql);
		$stmt->bindParam(":catagory",$catagory);
		$stmt->bindParam(":title",$title);
		return $stmt->execute();
 	}

 	public function readCat($table){
 		$sql = "SELECT * FROM $table ORDER BY cat_name ASC";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->execute();
 		return $stmt->fetchAll();
 	}

 	public function readPost($table){
 		$sql = "SELECT * FROM $table ORDER BY post_id DESC";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->execute();
 		return $stmt->fetchAll();
 	}

 	public function deleteCat($table,$id){
 		$sql = "DELETE FROM $table WHERE cat_id = :id";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->bindParam(":id",$id);
 		return $stmt->execute();
 	}
 	public function deletePost($table,$id){
 		$sql = "DELETE FROM $table WHERE post_id = :id";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->bindParam(":id",$id);
 		return $stmt->execute();
 	}

	public function view_post($table,$id){
		$sql = "SELECT * FROM $table WHERE post_id = :id ORDER BY post_id DESC";
		$stmt = db::mvcPrepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll();
 	}

    public function insert_post($table,$data){
    	$keys = implode(", ", array_keys($data));
    	$values = ":".implode(", :", array_keys($data));

    	$sql = "INSERT INTO $table ($keys) VALUES ($values)";
    	$stmt = db::mvcPrepare($sql);
    	foreach($data as $key=>$value){
    		$stmt->bindValue(":$key",$value);
    	}
    	return $stmt->execute();
    }
    
    public function readUser($table){
    	$sql = "SELECT * FROM $table ORDER BY name ASC";
    	$stmt = db::mvcPrepare($sql);
    	$stmt->execute();
    	return $stmt->fetchAll();
    }
    public function readUserpost($table,$id){
    	$sql = "SELECT * FROM $table WHERE writer_id = :id";
    	$stmt = db::mvcPrepare($sql);
    	$stmt->bindValue(":id",$id);
    	$stmt->execute();
    	return $stmt->fetchAll();
    }

    public function insert($table,$data){
		$keys = implode(", ", array_keys($data));
		$values = ":".implode(", :", array_keys($data));

		$sql = "INSERT INTO $table ($keys) VALUES ($values)";
		$stmt = db::mvcPrepare($sql);
		foreach($data as $key=>$value){
			$stmt->bindValue(":$key",$value);
		}
		return $stmt->execute();
    }
    
    public function deleteUser($table,$id){
    	$sql = "DELETE FROM $table WHERE user_id = :id";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->bindParam(":id",$id);
 		return $stmt->execute();
    }
 }
?>