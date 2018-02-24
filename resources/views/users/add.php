<?php 
include(dirname(dirname(__DIR__))."/templates".DIRECTORY_SEPARATOR ."header.php");
?>  
 <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-user"></i> </span>
            <h5 >Add New User</h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span12">
 
 <form id="aform" method="POST">
            <h2 class="form-login-heading">Add NewUser</h2> 
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="User ID" name="username" autofocus>
               
                <br>
                 <div class="switch">Check the box to grant this user  administrative rights to this REG  &nbsp;  &nbsp; 
   
      
      <input type="checkbox" name="admin">
  </div>
  <br>
                <input id='submit'class="btn btn-primary" value="CREATE NEW USER" type="submit" name='submit'/>
                <span id="loading">loading...<i class="fa fa-spinner fa-spin" style="font-size:24px"></i></span>
                <span id="msg"></span>
                <hr>
              </div>
              
              
                
              
    
            
             
    
          </form>    
          <script>
          $(document).ready(function(){
            $('#loading').hide();
$('#submit').click(function(event){
	event.preventDefault();
	
	$.ajax({
		url		: "../../../config/auth/newuser.php",
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