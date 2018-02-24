<!DOCTYPE html>
<?php
session_start();
if($_SESSION['id']){
$username = $_SESSION['username'];
$admin = $_SESSION['admin'];}else
header('location:../login.php');
?>
<html lang="en">
<head>
<title>PMS</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../../assets/css/matrix-style.css" />
<link rel="stylesheet" href="../../assets/css/matrix-media.css" />
<link href="../../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../../assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="../../assets/js/jquery.js"></script> 
<script type="text/javascript" src="../../assets/js/jquery.printElement.js"></script>
<script>
  
function goBack() {
    window.history.back();
    
}
function doprint(id){
  var tmp = id;
  $('#visits').printElement();
}
</script>
</head>
<body>
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html"> PMS</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome 
    
    <?php echo $username ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="../users/profile.php"><i class="icon-user"></i>User Profile </a></li>
        <li><a href="../users/reset.php"><i class="icon-check"></i>Change Password</a></li>
        <li class="divider"></li>
        <li><a href="../home/logout.php"><i class="icon-check"></i> Logout</a></li>
        <li class="divider"></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="/"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="../inmates/search.php"><i class="icon icon-inbox"></i> <span>Search Inmates</span></a> </li>
    <li> <a href="../inmates/add.php"><i class="icon icon-inbox"></i> <span>Add Inmates</span></a> </li>
    <?php if($admin){ ?>
    <li class="submenu"> <a href="#"><i class="icon icon-cog"></i> <span>Admin Settings</span></a>
      <ul>
        <li><a href="../users/add.php">Add User</a></li>
        <li><a href="../users/active.php">Activate or Deactive User</a></li>
        <li><a href="../activity">Activity</a></li>
      </ul>
    </li>
    <?php }?>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->