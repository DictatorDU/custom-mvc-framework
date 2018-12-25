<?php
class home_model extends main_model{
   
    public function __construct(){
    	parent::__construct();
    }

    public function readAll($table){
      $sql = "SELECT * FROM $table";
      $stmt = db::mvcPrepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }
    public function readBySingle($table,$conOne){
      $sql = "SELECT * FROM $table WHERE $conOne";
      $stmt = db::mvcPrepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function readByDouble($table,$conOne,$conTwo){
      $sql = "SELECT * FROM $table WHERE $conOne AND $conTwo";
      $stmt = db::mvcPrepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function insert($table,$data){
      $keys = implode(',', array_keys($data));
      $values = ":".implode(', :', array_keys($data));

      $sql = "INSERT INTO $table($keys) VALUES($values)";
      $stmt = db::mvcPrepare($sql);
      foreach($data as $key => $value){
        $stmt->bindParam(":$key",$value);
      }
      return $stmt->execute();
    }
        
    public function update($table,$data,$con){
      $updateKyes = NULL;
      foreach($data as $key => $value){
        $updateKyes .= "$key=:$key,";
      }

      $updateKyes = rtrim($updateKyes,",");
      $sql = "UPDATE $table SET $updateKyes WHERE $con";
      $stmt = db::mvcPrepare($sql);
      foreach($data as $key => $value){
        $stmt->bindParam(":$key",$value);
      }
      return $stmt->execute();
    }

    public function delete($table,$con,$limit = 1){
      $sql = "DELETE FROM $table WHERE $con LIMIT $limit";
      $stmt = db::mvcPrepare($sql);
      return $stmt->execute();
    }

    public function joinQuery($tbl_one,$tbl_two,$id){
      $sql = "SELECT $tbl_one.*,$tbl_two.cat_name FROM $tbl_one
              INNER JOIN $tbl_two
              ON $tbl_one.cat_id = $tbl_two.cat_id
              WHERE $tbl_one.post_id = $id";
      $stmt = db::mvcPrepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }
    public function postByCatModel($tbl_one,$tbl_two,$cat_id){
      $sql = "SELECT $tbl_one.*,$tbl_two.cat_name FROM $tbl_one
              INNER JOIN $tbl_two
              ON $tbl_one.cat_id = $tbl_two.cat_id
              WHERE $tbl_one.cat_id = $cat_id";
      $stmt = db::mvcPrepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function letestPost($table){
      $sql = "SELECT * FROM $table ORDER BY post_id DESC LIMIT 7";
      $stmt = db::mvcPrepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function readBySearch($tbl_post,$keyWord,$cat_id){
      if(!empty($keyWord) && !empty($cat_id)){
        $sql = "SELECT * FROM $tbl_post WHERE post LIKE '%$keyWord%' OR post_title LIKE '%$keyWord%' OR cat_id = $cat_id";
        $stmt = db::mvcPrepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(); 
      }elseif(isset($keyWord) && !empty($keyWord)){
        $sql = "SELECT * FROM $tbl_post WHERE post LIKE '%$keyWord%' OR post_title LIKE '%$keyWord%'";
        $stmt = db::mvcPrepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(); 
      }elseif(isset($cat_id) && !empty($cat_id)){
        $sql = "SELECT * FROM $tbl_post WHERE cat_id = $cat_id";
        $stmt = db::mvcPrepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(); 
      }
    }
}
?>