 <?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
?>  
<div style="background-color: white;">
<div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href><span class="label label-important"></span>Add New</a> </li>
       
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
          <form  method="POST" action="" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label"> Name :</label>
              <div class="controls">
                <input type="text" name="inmate" class="span11" placeholder="name" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Age:</label>
              <div class="controls">
                <input type="number" name="age" class="span11" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Complexion:</label>
              <div class="controls">
                <input type="text" name="complexion" class="span11"  />
            </div>
            <div class="control-group">
              <label class="control-label">Tribe:</label>
              <div class="controls">
                <input type="text" name="tribe" class="span11"  />
            </div>
        	</div>
             <div class="control-group">
              <label class="control-label">Country of Origin:</label>
              <div class="controls">
                <input type="text" name="country" class="span11"  />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Height:</label>
              <div class="controls">
                <input type="number" step="any" placeholder="0.00" name="height" class="span11"  />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Weight:</label>
              <div class="controls">
                <input type="number" name="weight" step="any" class="span11"  />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Serial No:</label>
              <div class="controls">
                <input type="text" name="serial_no" class="span11"  />
                <span class="help-block">eg, W178300</span> </div>
            </div>
        </div>
            <div class="control-group">
              <label class="control-label">Trade/Occupation:</label>
              <div class="controls">
                <input type="text" name="occupation" class="span11"  />
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Religion:</label>
              <div class="controls">
                <input type="text" name="religion" class="span11"  />
            </div>
        </div>
         <div class="control-group">
              <label for="normal" class="control-label">Education Level:</label>
              <div class="controls">
                <input type="text" id="" name="education" class="span8 required " required>
            </div>
        </div>
             <div class="control-group">
              <label class="control-label">Offence:</label>
              <div class="controls">
                <input type="text" name="offence" class="span11"  />
            </div>
        </div>
            <div class="control-group">
              <label class="control-label">Distinct Features:</label>
              <div class="controls">
                <textarea class="span11" name="features" ></textarea>
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
                <input type="Date" id="mask-phone" name="d_sentence" class="span8 required " required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Place of arrest</label>
              <div class="controls">
                <input type="text" id="mask-phone" name="p_arrest" class="span8 required " required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Place of Conviction</label>
              <div class="controls">
                <input type="text" id="mask-phone" name=p_conviction class="span8 required " required>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Date of Conviction</label>
              <div class="controls">
                <input type="Date" id="mask" class="span8" name="d_conviction" required>  
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Place of Committal</label>
              <div class="controls">
                <input type="text" id="mask-phone" name="p_committal" class="span8 " required>
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
              <input  type="button" id="save" name="save" class="btn btn-danger btn-lg" value="Save">

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
      		$("#save").click(function(e){
      			e.preventDefault();
      			$.ajax({

			url		: '../../../config/add/add.inmate.php',
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