<?php 
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
    $db_name = $row['username'];
    $db_pass = $row['password'];
    

    if (!empty($db_name)) {
        if (hash_equals($db_pass, crypt($password, $db_pass))) {
            $_SESSION['user_name'] = $db_name;
            $_SESSION['user_email'] = $db_email;
            $url = $_SESSION['url'];
            echo "<script>window.location = '$url'</script>";
            
        }else{
            echo "<script>alert('Incorrect password')</script>";
           
        }

    }else{
        echo "<script>alert('this account does not exist');</script>";
    }
   }
   ?>

	