<?php
/**
  * Admin login model
  */
 class adminLogin_model extends main_model{
 	
 	function __construct(){
 		parent::__construct();
 	}

 	public function chkInput($tbl_user,$email,$password){
 		$sql = "SELECT email FROM $tbl_user WHERE email = :email AND password = :password";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->bindParam(":email",$email);
 		$stmt->bindParam(":password",$password);
 		$stmt->execute();
 		if($stmt->rowCount() > 0){
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function adminAccess($tbl_user,$email,$password){
 		$sql = "SELECT * FROM $tbl_user WHERE email = :email AND password = :password";
 		$stmt = db::mvcPrepare($sql);
 		$stmt->bindParam(":email",$email);
 		$stmt->bindParam(":password",$password);
 		$stmt->execute();
 		return $stmt->fetchAll();
 	}
 } 
?>