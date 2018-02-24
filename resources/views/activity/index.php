
 <?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
require_once("../../../config/database/db.php");
$stmt = $conn->query("Select * from inmate");
$row = $stmt->num_rows;
$info = $conn->query("Select * from users");
$result = $info->num_rows;
?>  
<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="/"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="visits.php"> <i class="icon-th-list"></i> All Visits</a> </li>
        <li class="bg_ly"> <a href="user.php"> <i class="icon-inbox"></i><span class="label label-success">101</span>User Activity </a> </li>
      
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <div class="chart"></div>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong><?php echo $row ?></strong> <small>Total Inmates</small></li>
                <li class="bg_lh"><i class="icon-user"></i> <strong><?php echo $result?></strong> <small>Total Officers </small></li>
               
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2018 &copy; PMs. Brought to you by <a href="">GeO</a> </div>
</div>

<!--end-Footer-part-->

<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  