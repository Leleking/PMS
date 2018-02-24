<?php 
require_once("../../config/database/db.php");
if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
if($_POST['active']){
// $stmt = $conn->query()
$row =$conn->query("UPDATE users SET active =0 where id = $userid");
echo "Activate";
  }else{
    $row =$conn->query("UPDATE users SET active =1 where id = $userid");
    echo "Deactivate";
  }
}