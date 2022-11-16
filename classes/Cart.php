<?php

class Cart {
   public $db = null;
   public function __construct(DBController $db)
   {
      if(!isset($db->conn)) return null;
      $this->db = $db;
   }

    public function insertIntoCart($params=null, $table= "cart"){
        if($this->db->conn != null){
            if($params !=null){

                // Get table columns 
                $columns = implode(',', array_keys($params));

                $values = implode(',', array_values($params));

                $query_string = sprintf("INSERT INTO %s(%s) VALUES (%s)",$table, $columns,$values);
                //  Exicute Queries 
                $result = $this->db->conn->query($query_string);
                return $result;
            }
        }
    }

    public function addToCart($userId, $itemId){
        if(isset($userId) && isset($itemId)){
            $params= array(
                'user_id'=>$userId,
                'item_id'=>$itemId
            );
            $result = $this->insertIntoCart($params);
            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }
}