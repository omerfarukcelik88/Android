<?php
require_once 'connect.php';

if($_SERVER["REQUEST_METHOD"]=='POST'){

$result = array();
    $result['tarifler']=array();
   $sqlselect = $db->query("SELECT * FROM yenieklenentarifler order by id desc ",PDO::FETCH_ASSOC);
   if($sqlselect->rowCount()){
       foreach($sqlselect as $row){
		   array_push($result['tarifler'], $row);
	     
	      
       }
       echo json_encode($result);
   }
}
?>