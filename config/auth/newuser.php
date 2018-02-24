<?php


require_once("../../config/database/db.php");

session_start();

    if(empty($_POST['admin'])){
		$admin = 0;
		$active = 0;
    }else{
$admin    = 1;
$active	= 1;}
$username = $_POST["username"];
$password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );





if (empty($username)){
	echo 'Please input a username into the field provided';
	
}else{

$dbpassword = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->query("SELECT * from users where username ='$username'");
$row = $stmt->fetch_assoc();
			

			if(empty($row['username'])){
				$stmt = $conn->query("INSERT into users(username,password,admin,active) values ('$username','$dbpassword',$admin,$active) ");
			 $_SESSION['newuser'] = $username;
			 $_SESSION['pass'] = $password;

             echo "<a href='../../../config/file.php'> click to download password</a>";

			}else {
				echo "Username already used. Try another.";
		
					
			}



			
	}		
			
		
			






?>