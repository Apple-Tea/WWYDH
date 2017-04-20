<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      *[role="form"] {
    max-width: 530px;
    padding: 25px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
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
        
  
        
      </style>
   <link type="text/css" rel="stylesheet" href="css/navigation.css">
    
     
  </head>
  <body>
  <?php include_once("navigation.php");?>
      

<div class="container">
    <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
                <h2 class="text-center">Add Location</h2>
                
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" placeholder="Address" class="form-control" autofocus>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">City</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" placeholder="city o" class="form-control" autofocus>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="college" class="col-sm-3 control-label">State</label>
                    <div class="col-sm-9">
                        <input type="text" name="state" placeholder="State" class="form-control" autofocus>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="employment" class="col-sm-3 control-label">Zip</label>
                    <div class="col-sm-9">
                        <input type="text" name="zip" placeholder="zip" class="form-control" autofocus>
                    </div>
                </div>
                
                
                  
                
                <!-- /.form-group -->
                <div class="form-group ">
                                        <div class="col-md-2">
                    </div>
                    <div class="col-sm-4 col-sm-offset-3">
                        <button type="submit" class="btn ">Add</button>
                    </div>
                </div>
            </form> <!-- /form -->
</div>

     
       <div class="footer text-center">
      
      
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>