<?php

class Product
{
   public $db = null;
   public function __construct(DBController $db)
   {
      if(!isset($db->conn)) return null;
      $this->db = $db;
   }

   public function getData($table ="product"){
    $resul = $this->db->conn->query("SELECT * FROM {$table}");
    $resultArray= array();
    while($item = mysqli_fetch_array($resul, MYSQLI_ASSOC)){
        $resultArray[]= $item;
    }
    return $resultArray;
   }
}