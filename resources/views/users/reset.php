<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
$userid = $_SESSION['id'];
?>  
 <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
            <h5 >Change Password</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span12">
            <form id="aform" method="POST">
            <h2 class="form-login-heading">Change Password</h2>
            <div class="login-wrap">
                <div class="input-field col s3">
          <input type="hidden" name="userid" value="<?php echo $userid?>"/>
          <input id="pass_old" name="pass_old" type="password" class="form-control" placeholder="Old Password">
          
        </div>
          <input id="pass_new" name="pass_new" type="password" class="form-control" placeholder="New Password">
          
       
         
          <input type="password" class="form-control" placeholder="Confirm Password" name="confirm" autofocus>
          
    
               
                <br>
                
             <br>
                <input id='submit' class="btn btn-primary " value="CHANGE PASSWORD" type="submit" name='submit'/>
                <span id="loading">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
                <span id="msg"></span>
                <hr>
              </div>
</form>
              
              
                
              
    
            
             
    
          </form>     
  </div>
  <script>
$(document).ready(function(){
 $('#loading').hide();
$('#submit').click(function(event){
	event.preventDefault();
	
	$.ajax({
	url		: "../../../config/auth/resetpassword.php",
	method	: "POST",
    data    : $("#aform").serialize(),
    beforeSend  : function(){
				
				$('#loading').show();
			},
			complete  : function(){
        $('#loading').hide();
			},
		success : function(data){
			$('#msg').html(data);
		}
	});
	
});

	
	
}); 
</script>
<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."footer.php");
?>  