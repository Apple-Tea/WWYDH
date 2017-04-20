
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
    .navbar .navbar-nav{
           color: #fff; 
          }
        .container{
            margin-top: 90px;
        }
   body{
            font-family: 'Anton', sans-serif;
        }
    .panel{
            
             -webkit-border-radius: 0;
              -moz-border-radius: 0;
              border-radius: 0px;
              -webkit-box-shadow: 2px 1px 22px #dbd8db;
              -moz-box-shadow: 2px 1px 22px #dbd8db;
              box-shadow: 2px 1px 22px #dbd8db;
             border: 1px solid#f9f9f9;
        margin-bottom: 0px;
          
    }
    .panel-footer{
           
             border: 1px solid #f7f7f7;
    }
    .btn {
           font-family: 'Anton', sans-serif;
          -webkit-border-radius: 3;
  -moz-border-radius: 3;
  border-radius: 3px;
  -webkit-box-shadow: 0px 4px 10px #666666;
  -moz-box-shadow: 0px 4px 10px #666666;
  box-shadow: 0px 4px 10px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #6f7173;
  padding: 10px 20px 10px 20px;
  text-decoration: none;

}

.btn:hover {
   background: #000000;
    color:#fff;
  text-decoration: none;
}
        .thumbnail{
           border: none;
            
        }
        .image{
            width:100%;
            height: 300px;
            border:1px dashed #666;
            margin-left:10px;
             margin-right:10px;
            font-size: 20px;
        }
        .panel-body{
            
            padding:0px;
        }
        .submitBtn{
            width: 100%;
            height:100%;
            padding-left: 40%;
        }
      </style>
   
    
      <link href="css/navigation.css" rel="stylesheet">
  </head>
  <body>
      

  
          
          
                           
                             <div class="panel panel-default">
                               
                                <div class="panel-body">
                                     <div class="container">
                                    
                                   
                                    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        
                                       <div class="thumbnail">
                                          <?php 
                             include_once("php/db_conx.php");
                             if(isset($_POST["id"])){
                                 $id=$_POST["id"];
                                 $sql="SELECT * FROM `locations` WHERE `id` = $id";
                                 $query=mysqli_query($db_conx,$sql);
                                 if($row=mysqli_fetch_row( $query)){
                                    //print_r($row);
                                    echo '<img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=700x300&location='.$row[10].','.$row[9].'&fov=90&heading=235&pitch=10&key=AIzaSyB_bkje70Q4FVLB4O8HaQ2VS07Lxu4HCV0" alt="">';
                                 }
                                     
                             }else{
                                 
                             }
                             
                             
                             ?>
                                 
                                 
                                 
                                 </div> 
                                        <hr>
                                        </div>
                                        </div>
                                    
                                        <div class="row image">
                                            <div class="col-md-2 col-sm-2"></div>
                                        <div class="col-md-8 col-sm-8">
                                  <p>Building Address: <?php echo $row[1];?></p>
                                  <p>City,State: Baltimor,MD</p>
                                  <p>Zip Code: <?php echo $row[4];?></p>
                                           
                                           
                                  <p>Neighborhood: <?php echo $row[6];?></p>
                                  <p>Police District: <?php echo $row[7];?></p>
                                  <p>District: <?php echo $row[8];?></p>
                                  <p>Owner: <?php echo $row[11];?></p>
                                
                                        
                                        
                                     </div>
                                    </div>
                                    
                                    </div>
                                        </div>
                                    
                                    
                                 
                                  
                                
                            
        <div class="panel-footer">
           <form class="form-horizontal" role="form" method="post" action="newproject.php">
                <!-- /.form-group -->
                <div class="form-group ">  
                    <div class="submitBtn">
                        <button type="submit" class="btn ">Start Project</button>
                    </div>
                </div>
            </form> <!-- /form -->
         </div>

      </div>
                              
              
     
  </body>
</html>