
<?php
//logout.page
/*
this where the session is destroyed and unset  then 
by using the header() function take the user to the index.php page

*/
session_start();

// Delete certain session
unset($_SESSION['id']);
unset($_SESSION['admin']);
unset($_SESSION	['username']);
// Delete all session variables


// Jump to login page

header('location:../login.php');
?>