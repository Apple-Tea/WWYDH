<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-blue.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
      
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <style>
        body{
            font-family: 'Anton', sans-serif;
        }
        .container{
            margin-top: 60px;
        }
        
        .panel .panel-body{
            
        }
      *[role=form] {
    max-width: 530px;
    padding: 25px;
    margin: 0 auto;
    background-color: #d4e2f9;
    border-radius: 0.3em;
}

*[role=form] h2 {
     text-align: center;
    font-family: 'Anton', sans-serif;
}
    
    
/*Phone Number Input "hack"*/
.phone-number .col-sm-3::after{
 content: "-";
 position:absolute;
    right: 5px;
    color: black;
    border: 0px solid;
    top: 5px;
}

.col-xs-4{
	width:25%;
}
.col-xs-3,.col-xs-4{
	padding-left:0;
}
        .form-horizontal{
            border: 1px solid #f2f2f2;
           -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  -webkit-box-shadow: 3px 4px 3px #dbd8db;
  -moz-box-shadow: 3px 4px 3px #dbd8db;
  box-shadow: 3px 4px 3px #dbd8db;
            font-family: 'Rubik', sans-serif;
        } 
        
     .btn {
        font-family: 'Anton', sans-serif;
   -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0px;
  -webkit-box-shadow: 2px 1px 22px #dbd8db;
  -moz-box-shadow: 2px 1px 22px #dbd8db;
  box-shadow: 2px 1px 22px #dbd8db;
 
  color: #2e2e2e;
  font-size: 25px;
  background:#fafafa;
     
  padding: 10px 20px 10px 20px;
  text-decoration: none;
         
}

.btn:hover {
  background: #f2f2f2;
  text-decoration: none;
}
        
  
        
      .auto-style1 {
		text-align: center;
	}
        
  
        
      .auto-style2 {
		margin-left: 6px;
	}
        
  
        
      .auto-style3 {
	color: #525456;
}
        
  
        
      </style>
   <link type="text/css" rel="stylesheet" href="css/navigation.css">
    
     
  </head>
  <body>
  <div class="auto-style1">
  <?php include_once("navigation.php");?>
      

<div class="container">
    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
                <h2 class="auto-style3">Add Location</h2>
                
                <hr>
                
                <div class="form-group" style="height: 43px">
                    <span class="auto-style3">
                    <label for="firstName" class="col-sm-3 control-label">Address</label></span>
                    <div class="col-sm-9">
                        <input type="text" name="Address" placeholder="Address" class="form-control" autofocus>
                    </div>
                </div>
                
                <div class="form-group" style="height: 43px">
                    <span class="auto-style3">
                    <label for="lastName" class="col-sm-3 control-label">City</label></span>
                    <div class="col-sm-9">
                        <input type="text" name="City" placeholder="city o" class="form-control" autofocus>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <span class="auto-style3">
                    <label for="college" class="col-sm-3 control-label">State</label></span>
                    <div class="col-sm-9">
                        <select class="auto-style2" name="State" style="width: 128px">
						<option>Alabama</option>
						<option>Alaska</option>
						<option>Arizona</option>
						<option>Arkansas</option>
						<option>California</option>
						<option>Colorado</option>
						<option>Connecticut</option>
						<option>Delaware</option>
						<option>Florida</option>
						<option>Georgia</option>
						<option>Hawaii</option>
						<option>Idaho</option>
						<option>Indiana</option>
						<option>Iowa</option>
						<option>Kansas</option>
						<option>Kentucky</option>
						<option>Louisiana</option>
						<option>Maine</option>
						<option selected="">Maryland</option>
						<option>Massachusetts</option>
						<option>Michigan</option>
						<option>Minnesota</option>
						<option>Mississippi</option>
						<option>Missouri</option>
						<option>Montana</option>
						<option>Nebraska</option>
						<option>Nevada</option>
						<option>New Hampshire</option>
						<option>New Jersey</option>
						<option>New Mexico</option>
						<option>New York</option>
						<option>North Carolina</option>
						<option>North Dakota</option>
						<option>Ohio</option>
						<option>Oklahoma</option>
						<option>Oregon</option>
						<option>Pennsylvania</option>
						<option>Rhode Island</option>
						<option>South Carolina</option>
						<option>South Dakota</option>
						<option>Tennessee</option>
						<option>Texas</option>
						<option>Utah</option>
						<option>Vermont</option>
						<option>Virginia</option>
						<option>Washington</option>
						<option>West Virginia</option>
						<option>Wisconsin</option>
						<option>Wyoming</option>
						</select>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <span class="auto-style3">
                    <label for="employment" class="col-sm-3 control-label">Zip</label></span>
                    <div class="col-sm-9">
                        <input type="text" name="Zip" placeholder="zip" class="form-control" autofocus>
                    </div>
                </div>
                
                
                  
                
                <!-- /.form-group -->
                <div class="form-group ">
                                        <div class="col-md-2">
                    </div>
                    <div class="col-sm-4 col-sm-offset-3">
					<!-- Accent-colored raised button with ripple -->
					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
					  Button
					</button>                    </div>
                </div>
            </form> <!-- /form -->
</div>

     
       <div class="footer text-center">
      
      
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </div>
  </body>
</html>
