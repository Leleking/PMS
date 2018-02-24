<?php 
include(dirname(dirname(__FILE__))."/templates".DIRECTORY_SEPARATOR ."login.header.php");
?>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="../../config/auth/login.php" method="POST">
				 <div class="control-group normal_text">PRISON MANAGEMENT SYSTEM</div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="username" placeholder="Username" required />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password"  required/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" name="login"  class="btn btn-success" value="Login"/></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Please see any of the administrators in person to get your password back</p>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                </div>
            </form>
        </div>
        <?php 
include(dirname(dirname(__FILE__))."/templates".DIRECTORY_SEPARATOR ."login.footer.php");
?>  