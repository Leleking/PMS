
<?php 
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
require_once('../functions/validation.class.php');

if($_POST['depatch']){
    $depatcher = $_POST['depatch'];
    $id  = $_POST['id'];
    $stmt = $conn->query("UPDATE visits set  depatcher ='$depatcher' where id = $id;");
    echo "<script>window.history.back();
    </script>";
}