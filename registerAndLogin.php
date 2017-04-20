<?php
/*include_once("php/check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
    header("location: http://cheatingornah.com/searchSpouse.php?u=".$_SESSION["username"]);
    exit(); 
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--BootStrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="css/sign-in-out-panel.css" rel="stylesheet">
    <!--Logo font-->
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <style>    
 @import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
 @import url(https://fonts.googleapis.com/css?family=Open+Sans);
</style>  
     <script src="js/ajax.js"></script>
<script src="js/validationForSignInAndUp.js"></script>    
    
<script src="http://code.jquery.com/jquery-1.11.1.js">
</script>
    
    <!--jquery for changing login to register-->
 <script>    
   $(document).ready(function(e){
      $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
       
       
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});     
 });   
</script>   
 
</head>
<body>
<div class="container">
   <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form" action="#" method="post" role="form" style="display: block;"  onsubmit="return false;">
                  <h1 class="text-center"  style="font-family: 'Bungee', cursive;font-size:25px;">WWYDH</h1>
                  
                <h2>LOGIN</h2>
                 
                  
                  <div class="form-group">
                    <input type="text" name="logusername"  tabindex="1" class="form-control" placeholder="Username"
                           id="luserName" autocomplete="off">
                   
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="LogInpassword" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                
                  <div class="col-sm-6 form-group ">     
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" onclick="login()">
                      <span id="LogInStatus"></span>
                      
                  </div>
                  <div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="pasword-recovery.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
              </form>  
              <form id="register-form" method="post" role="form" style="display: none;"  onsubmit="return false;">
                  <h1 class="text-center"  style="font-family: 'Bungee', cursive;font-size:25px;">WWYDH</h1>
                <h2>REGISTER</h2>
                  <div class="form-group">
                    <input type="text" name="username" onkeyup="check('userName','php/userNameCheck.php','unamestatus','username=')" onblur="isEmpty('userName','unamestatus')" id="userName" tabindex="1" class="form-control" placeholder="Username" value="">
                       <span id="unamestatus"></span>
                  </div>
                  
                  <div class="form-group">
                    <input type="email" name="email" id="regEmail" tabindex="1" class="form-control" onblur=" checkEmail()" placeholder="Email Address" onkeyup="isEmpty('regEmail','emailStatus')">
                      <span id="emailStatus"></span>
                  </div>
                  
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" onKeyup="checkPasswordStrength()" onblur="isEmpty('password','passwordStatus')">
                      <span id="passwordStatus"></span>
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" onkeyup="confirmPass()" onblur="isEmpty('confirm-password','passStatus')">
                    <span id="passStatus"></span> 
                      
                  </div>
                  
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">  
                        
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" onclick="signup()" value="Register Now" onblur="isEmpty('register-submit','status')">
                          
                       <!--<button id="register-submit" onclick="signup()" >Register </button>-->
                           <span id="status"></span>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <a href="#" class="active" id="login-form-link"><div class="login">LOGIN</div></a>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#" id="register-form-link" ><div class="register">REGISTER</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>