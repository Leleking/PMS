<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
require_once("../../../config/database/db.php");
$id = $_GET['id'];
$stmt = $conn->query("Select * from inmate where id = $id");
$row = $stmt->fetch_assoc();
$info = $conn->query("Select * from inmate_sentence_info where inmate_id = $id");
$result = $info->fetch_assoc();

?>  
<div style="background-color: white;"></div>
	
<div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lg"> <a href><span class="label label-important"></span>Edit :<?php echo $row['name']."'s Profile" ?></a> </li>
       
        <li onclick="goBack()" class="bg_lo" style="float:right"> <a> <i class="icon-arrow-left"></i>Go Back</a> </li>
      </ul>	
</div>

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Inmate-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form  method="POST" action="../../../config/edit/edit.inmate.php" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label"> Name :</label>
              <div class="controls">
                <input type="text" name="inmate" value="<?php echo $row['name'] ?>" class="span11" placeholder="name" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Age:</label>
              <div class="controls">
                <input type="number" name="age" value="<?php echo $row['age'] ?>" class="span11" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Complexion:</label>
              <div class="controls">
                <input type="text" name="complexion" class="span11" value="<?php echo $row['complexion'] ?>" />
            </div>
            <div class="control-group">
              <label class="control-label">Tribe:</label>
              <div class="controls">
                <input type="text" name="tribe" class="span11" value="<?php echo $row['tribe'] ?>" />
            </div>
        	</div>
             <div class="control-group">
              <label class="control-label">Country of Origin:</label>
              <div class="controls">
                <input type="text" name="country" class="span11" value="<?php echo $row['country'] ?>"  />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Height:</label>
              <div class="controls">
                <input type="number" step="any" placeholder="0.00" name="height" class="span11" value="<?php echo $row['height'] ?>" />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Weight:</label>
              <div class="controls">
                <input type="number" name="weight" step="any" class="span11" value="<?php echo $row['weight'] ?>"  />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Serial No:</label>
              <div class="controls">
                <input type="text" name="serial_no" class="span11" value="<?php echo $result['serial_no'] ?>" />
                <span class="help-block">eg, W178300</span> </div>
            </div>
        </div>
            <div class="control-group">
              <label class="control-label">Trade/Occupation:</label>
              <div class="controls">
                <input type="text" name="occupation" class="span11" value="<?php echo $row['occupation'] ?>" />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Religion:</label>
              <div class="controls">
                <input type="text" name="religion" class="span11" value="<?php echo $row['religion'] ?>"  />
            </div>
        </div>
         <div class="control-group">
              <label for="normal" class="control-label">Education Level:</label>
              <div class="controls">
                <input type="text" id="" name="education" class="span8 required " value="<?php echo $row['education'] ?>" required>
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Offence:</label>
              <div class="controls">
                <input type="text" name="offence" class="span11" value="<?php echo $result['offence'] ?>"  />
            </div>
        </div>
            <div class="control-group">
              <label class="control-label">Distinct Features:</label>
              <div class="controls">
                <textarea class="span11" name="features" value="<?php echo $row['features'] ?>" ></textarea>
              </div>
            </div>
           
        </div>
      </div>
	</div>

 <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Other information</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
          	<div class="control-group">
              <label for="normal" class="control-label">Date of sentence</label>
              <div class="controls">
                <input type="Date" id="mask-phone" name="d_sentence" class="span8 required " value="<?php echo $result['d_sentence'] ?>" required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Place of arrest</label>
              <div class="controls">
                <input type="text" id="mask-phone" name="p_arrest" class="span8 required " value="<?php echo $result['p_arrest'] ?>" required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Place of Conviction</label>
              <div class="controls">
                <input type="text" id="mask-phone" value="<?php echo $result['p_conviction'] ?>" name=p_conviction class="span8 required " required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Date of Conviction</label>
              <div class="controls">
                <input type="Date" id="mask" class="span8" name="d_conviction" required>  
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Place of Committal</label>
              <div class="controls">
                <input type="text" id="mask-phone" class="span8 " name="p_committal" value="<?php echo $result['p_committal'] ?>" required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Date of Committal</label>
              <div class="controls">
                <input type="Date" id="mask" class="span8" required>  
            </div>
             <div class="control-group">
              <label for="normal" class="control-label">Date of Sentence</label>
              <div class="controls">
                <input type="Date" name="d_sentence" id="mask" class="span8" required>  
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Date| Sentence Expire</label>
              <div class="controls">
                <input type="Date" id="mask" name="d_expire" class="span8" required>  
            </div>
             <div class="form-actions">
              <input  type="submit" id="save" name="save" class="btn btn-danger btn-lg" value="Save">

            </div>
            <div id="loading">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></div>
            <div id="result"></div>
           
        </div>
          </form>
        </div>
      </div>
      <script>
      	
      	$(document).ready(function(){
      		$('#loading').hide();
      		$('$save').click(function(){
                  $('#loading').show();
              })
      	});
      </script>

<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  