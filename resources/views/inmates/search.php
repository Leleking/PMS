 <?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
require_once("../../../config/database/db.php");
?>  
   <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Collspan Table Example</h5> <span id="loading">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
            <div id="search">
              <form method="POST">
  <input type="text" name="search" placeholder="Search here..."/>
  <button type="submit" id="submit" name="submit" ><i class="icon-search icon-white"></i></button></form>
</div>
            </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Profile</th>
                </tr>
              </thead>
              <tbody id="result">
                
                <?php
                $stmt = $conn->query("Select * from inmate");
                
                while($row = $stmt->fetch_assoc() ){
                  $name =$row['name'];
                  $id = $row['id'];
                  ?>
                   <tr>
                    <td><?php  echo $id?></td>
                 <td><?php echo $name;?></td>
                    <td>
              <a href=<?php echo "profile.php?id=".$id;?> class="btn btn-primary btn-mini">OPEN</a>
                    </td>
                  </tr>

                <?php }?>
                
               
               
                  
                
              
              </tbody>
            </table>
          </div>
        </div>

      <script>
      	
      	$(document).ready(function(){
      		$('#loading').hide();
      		$("body").delegate('#submit','click',function(e){
      			e.preventDefault();
      			$.ajax({

			url		: '../../../config/search/search.inmate.php',
			method  : 'POST',
			data    : $("form").serialize(),
			beforeSend  : function(){
				
				$('#loading').show();
			},
			complete  : function(){
        $('#loading').hide();
			},
			success : function(data){
				$('#result').html(data);

			},
			
      		});
      	});
      	});
      </script>

<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  