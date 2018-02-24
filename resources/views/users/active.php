<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
require_once("../../../config/database/db.php");
?>  
   <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Activate or Deactivate User</h5> <span id="loading">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
          
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Date Added</th>
                  <th>Active</th>
                </tr>
              </thead>
              <tbody id="result">
                
                <?php
                $stmt = $conn->query("Select * from users");
                
                while($row = $stmt->fetch_assoc() ){
                  
                  ?>
                   <tr>
                    <td><?php  echo $row['id']?></td>
                     <td><?php echo $row['username'];?></td>
                     <td><?php echo $row['timestamp'];?></td>
                    <td>
                        <?php if($row['admin']) {?>
                            <a class="btn btn-disabled btn-mini">Admin</a>
                       <?php } else {?>
             
              <a id="submit" active="<?php echo $row['active']?>" userid="<?php echo $row['id']?>" class="btn btn-primary btn-mini"><span id="<?php echo 'msg'.$row['id']?>">
              <?php if($row['active']){ echo 'Deactivate';}else {echo 'Activate';};  ?></span>
              </a>
                       <?php }?>
                    </td>
                  </tr>

                <?php }?>
                
             
               
                  
                
              
              </tbody>
            </table>
            <div id="sum">nothign</div>
          </div>
        </div>

      <script>
      	
      	$(document).ready(function(){
      		$('#loading').hide();
      		$("body").delegate('#submit','click',function(e){
                  $('#loading').show();
                  var userid = $(this).attr("userid");
                  var active = $(this).attr("active");
                  e.preventDefault();
                  
      			$.ajax({

			url		: '../../../config/auth/activation.php',
			method  : 'POST',
			data    : {userid:userid,active:active},
			beforeSend  : function(){
				
				$('#loading').show();
			},
			complete  : function(){
        $('#loading').hide();
			},
			success : function(data){
                $('#msg'+userid).html(data);
                

			},
			
              });
              
      	});
      	});
      </script>

<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  