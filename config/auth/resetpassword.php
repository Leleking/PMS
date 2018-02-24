<?php
require_once("../../config/database/db.php");
session_start();
 $userid =  $_POST['userid'];
 $old 		=  $_POST['pass_old'];
 $new 		=  $_POST['pass_new'];
 $confirm 	=  $_POST['confirm'];

 if (empty($old) || empty($new) || empty($confirm)){
	echo 'Sorry, fields cannot be empty';
	
}else
if(strlen($new)< 5){
	echo 'Password should have more than 4 characters';
}else {
	if($new != $confirm){
		echo 'unmatching passwords';
	}
	else{
    //$row = $conn->query("select * from users where userid = $userid");
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("s", $userid);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();  
	$db_pass = $row['password'];

if (password_verify($old,$db_pass)){
	$dbpassword = password_hash($new, PASSWORD_DEFAULT);
	$row =$conn->query("UPDATE users SET password = '$dbpassword' where id = $userid");
	if($row){
	echo 'Password succesfully changed';
}else{
	echo 'Server error. Cannot change password';
}
	}else{
		//incorrect
		echo "Incorrect old password";
	}
}
}