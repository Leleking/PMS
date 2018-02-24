<?php

require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');
session_start();


 
 echo "Oops, Sorry, but this functionality has been disabled";
//delete inmate
/*
if(isset($_POST['delete'])){
    $id = $_SESSION['inmate_id'];
    echo $id;
	$stmt   = $conn->query("DELETE FROM inmate
    WHERE id=$id");
$stmt   = $conn->query("DELETE FROM inmate_sentence_info
WHERE inmate_id=$id");

$stmt   = $conn->query("DELETE FROM visits
    WHERE inmate_id=$id");
    if($stmt){
        echo "<div>deleted</div>";
        echo "<a href='/'>GO HOME</a>";
    }
}else{
    echo "you don't have clearance";
}

*/
?>