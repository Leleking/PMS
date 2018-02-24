<?php 
require_once("../../config/database/db.php");
session_start();
	if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();  

    // get information from database
    $db_id = $row['id'];
    $db_name = $row['username'];
    $db_pass = $row['password'];
    $db_admin = $row['admin'];
    $db_active=$row['active'];
    

    if (!empty($db_name)) {
        if (hash_equals($db_pass, crypt($password, $db_pass))) {
            $_SESSION['id']  = $db_id;
            $_SESSION['username'] = $db_name;
            $_SESSION['admin'] = $db_admin;
            if($db_active){
          echo "<script>window.location = '../../resources/views/home'</script>";
            }else {
                echo "<script>alert('You are an inactive User');
                window.location='../../resources/views/home/logout.php';</script>";

            }
        }else{
            echo "<script>alert('Incorrect password');
            window.location='../../resources/views/login.php';</script>";
           
        }

    }else{
        echo "<script>alert('this account does not exist');
            window.location='../../resources/views/login.php';
        </script>";
    }
   }
   ?>

	