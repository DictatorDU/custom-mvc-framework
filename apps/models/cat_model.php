<?php
class cat_model extends main_model{
   
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
        $stmt->bindValue(":$key",$value);
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
}
?>