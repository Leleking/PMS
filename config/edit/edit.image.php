<?php 
require_once(dirname(__DIR__).DIRECTORY_SEPARATOR."database".DIRECTORY_SEPARATOR."db.php");
session_start();
If($_FILES['image']['name']){
$target_dir = "../add/upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 1e+6) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        $image = $_FILES["image"]["name"];
        $id     =   $_SESSION['inmate_id'];
        $url    = $_SESSION['url'];
        $stmt = $conn->query("SELECT image from inmate where id = $id;");
        $stmt = $stmt->fetch_assoc();
        unlink('../add/upload/'.$stmt['image']);
        $stmt = $conn->query("UPDATE inmate set  image ='$image' where id = $id;");
        //echo "<script>window.location=$url</script>";
        header('location:'.$url);

    } else {
       
       echo "Sorry, there was an error uploading your file.";
    }
}
}else{
    echo "no image selected";
}
?>