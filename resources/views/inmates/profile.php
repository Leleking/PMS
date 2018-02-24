<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
require_once("../../../config/database/db.php");
$id = $_GET['id'];
$_SESSION['url'] =$_SERVER['REQUEST_URI'];
$_SESSION['inmate_id']= $id;
$stmt = $conn->query("Select * from inmate where id = $id");
$row = $stmt->fetch_assoc();
$info = $conn->query("Select * from inmate_sentence_info where inmate_id = $id");
$result = $info->fetch_assoc();
$visit = $conn->query("Select * from visits where inmate_id = $id");
$visit = $visit->num_rows;
$d_sentence = strtotime($result['d_sentence']);
$d_sentence = date("D - dS M Y ", $d_sentence);
$d_expire = strtotime($result['d_expire']);
$d_expire = date("D - dS M Y ", $d_expire);
$d_conviction = strtotime($result['d_conviction']);
$d_conviction = date("D - dS M Y ", $d_conviction);
?><div class="quick-actions_homepage">
<ul class="quick-actions">
  <li class="bg_lb"> <a href><span class="label label-important"></span>Profile</a> </li>
 
  <li onclick="goBack()" class="bg_lo" style="float:right"> <a> <i class="icon-arrow-left"></i>Go Back</a> </li>
</ul>	
</div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
            <h5 >Inmate Profile</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span3">
                <table class="">
                  <tbody>
                    <tr>
                    <td>
                    <div id="loading">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></div>
                    <?php
                    if($row['image']){?>
                    <img src="<?php echo "../../../config/add/upload/".$row['image'];?>"/>
                    <form action="../../../config/edit/edit.image.php" method="post" enctype="multipart/form-data">
                        <input  type="file" name="image" id="fileToUpload">
                        <input type="submit" id="image" value="Change Image" name="submit">
</form>
<?php } else { ?>
                     <form action="../../../config/add/uploadimage.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="fileToUpload">
    <input type="submit" id="image" value="Upload Image" name="submit">
</form>

<?php };?>
                    </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
               <div class="span3">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4><?php echo $row['name']?></h4></td>
                    </tr>
                    <tr>
                      <td>Age: <?php echo $row['age']?></td>
                    </tr>
                    <tr>
                      <td>Complexion: <?php echo $row['complexion']?></td>
                    </tr>
                    <tr>
                      <td>Tribe: <?php echo $row['tribe']?></td>
                    </tr>
                    <tr>
                      <td>Country or Origin: <?php echo $row['country']?></td>
                    </tr>
                     <tr>
                      <td>Height: <?php echo $row['height']?></td>
                    </tr>
                     <tr>
                      <td>Weight: <?php echo $row['weight']?></td>
                    </tr>
                     <tr>
                      <td>Religion: <?php echo $row['religion']?></td>
                    </tr>
                     <tr>
                      <td>Education level: <?php echo $row['education']?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="span6">
                <table class="table table-bordered table-invoice">
                  <tbody>
                    <tr>
                    <tr>
                      <td class="width30">Serial No#:</td>
                      <td class="width70"><strong><?php echo $result['serial_no'];?></strong></td>
                    </tr>
                    <tr>
                      <td>Issue Date:</td>
                      <td><strong><?php  
                      echo $d_sentence;
                      ?></strong></td>
                    </tr>
                     <tr>
                      <td>Sentence:</td>
                      <td><strong>15yrs</strong></td>
                    </tr>
                    <tr>
                      <td>Due Date:</td>
                      <td><strong><?php 
                      echo $d_expire;
                      ?></strong></td>
                    </tr>
                  <td class="width30">Distinctive Features</td>
                    <td class="width70"><strong><?php echo $row['features']?></strong> <br>
                     
                  </tr>
                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Conviction</th>
                      <th class="head1">Information</th>
                      <th class="head0 right">Date</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Offence</td>
                      <td><?php echo $result['offence']?></td>
                      <td class="right"></td>
                     
                    </tr>
                    <tr>
                      <td>Place of Conviction</td>
                      <td><?php echo $result['p_conviction']?></td>
                      <td class="right"><?php echo $d_conviction ?></td>
                      
                    </tr>
                    <tr>
                      <td>Place of Committal</td>
                      <td><?php echo $result['p_committal']?></td>
                      <td class="right"></td>
                      
                    </tr>
                    <tr>
                      <td>Place of Arrest</td>
                      <td><?php echo $result['p_arrest']?></td>
                      <td class="right"></td>
                      
                    </tr>
                    
                  </tbody>
                </table>
                 <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href=<?php echo "visits.php?id=".$id;?>><span class="label label-important"><?php echo $visit;?></span>Visits</a> </li>
        <li class="bg_lg span3"> <a href="#addvisit" id="visit"> <i class="icon-th-list"></i> Add Visit</a> </li>
        <li class="bg_ly"> <a href="" data-toggle="modal" data-target="#deleteinmate"> <i class="icon-trash"></i>Delete Inmate </a> </li>
        <li class="bg_lo"> <a href=<?php echo "profile.php?id=".$id;?>> <i class="icon-refresh"></i>Refresh</a> </li>
        <li class="bg_ls"> <a href=<?php echo "edit.php?id=".$id;?>> <i class="icon-pencil"></i>Edit</a> </li>
        
      </ul>
    </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

<!-- Modal -->
<div class="modal fade" id="deleteinmate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../../../config/del/del.inmate.php">
        //To delete Inmate, you are required to input a level 3 password
        <input type="password" name="password">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-primary">DELETE</button>
      </div>
    </div>
</form>
  </div>
</div>
<!-- Large modal -->


<div class="modal fade addvisit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Visit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">DELETE</button>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" id="addvisit"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
            <h5>Add visit to <?php echo $row['name'] ?> Visit Directory</h5>
          </div>
          <div class="widget-content nopadding">
            <form id="form-" class="form-horizontal" method="post">
              <div id="form" class="step">
                <div class="control-group">
                  <label class="control-label">Visitor's Name</label>
                  <div class="controls">
                    <input id="" type="text" name="name" />
                    <input id="" type="hidden" name="inmate_id" value="<?php echo $id;?>"  />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">contact</label>
                  <div class="controls">
                    <input id="" type="text" name="contact" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Occupation</label>
                  <div class="controls">
                    <input id="" type="text" name="occupation" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Items:</label>
                  <div class="controls">
                   <textarea name="items"></textarea>
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">ID Card No#</label>
                  <div class="controls">
                    <input id="" type="text" name="card_no" />
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">Address</label>
                  <div class="controls">
                   <textarea name="address"></textarea>
                  </div>
                </div>
               
              </div>
              <div class="form-actions">
                <input id="save" class="btn btn-primary" type="submit" value="ADD" />
                <div id="status">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></div>
              </div>
              <div id="submitted"></div>
            </form>
          </div>
        </div>
      </div>
    </div>


<script>
	$(document).ready(function(){
      		$('#loading').hide();
          $('#status').hide();
          $('#addvisit').hide();
      		$("#image").click(function(){
            $('#loading').show();
          });
          $('#visit').click(function(){
            $('#addvisit').show();
          });
          $('#loading').hide();
      		$("#save").click(function(e){
      		e.preventDefault();
          $.ajax({

url		: '../../../config/add/visit.inmate.php',
method  : 'POST',
data    : $("form").serialize(),
beforeSend  : function(){
  
  $('#status').show();
},
complete  : function(){
  $('#status').hide();
},
success : function(data){
  $('#submitted').html(data);

},

    });
      	
      	});
  });
</script>
<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  