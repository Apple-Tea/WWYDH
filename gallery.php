<?php
include_once("php/db_conxw.php");

// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'TTY/HTTP/Request2.php';

$request = new Http_Request2('https://api.wmata.com/TrainPositions/TrainPositions?contentType={json}');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'api_key' => '{6b700f7ea9db408e9745c207da7ca827}',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}









$sql="SELECT building_address,longitude,latitude From tbl_name";
$query=mysqli_query($db_conx,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thumbnail Gallery - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<style>
    
    .thumbnail {
    border: 0 none;
    box-shadow: none;
}
    .container{
        margin: 30px;
    }
    body{
        font-family: 'Fjalla One', sans-serif;
    }
    
</style>
    <link type="text/css" rel="stylesheet" href="css/navigation.css">
</head>

<body>
   
    <?php include_once("navigation.php");?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="page-header text-center">Locations Gallery</h1>
            </div>
            <div class="col-sm-0 col-md-2 col-lg-2 col-xl-2"></div>
             <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
         <?php   
            $count=0;
            while ($row=mysqli_fetch_row($query)) {
                if($count<50&& $count>0){
                    echo  '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="https://maps.googleapis.com/maps/api/streetview?size=400x400&location='.$row[2].','.$row[1].'&fov=90&heading=235&pitch=10&key=AIzaSyB_bkje70Q4FVLB4O8HaQ2VS07Lxu4HCV0" alt="">
                </a><h5>'.$row[0].' Baltimore, MD</h5>
                        </div>';     
                }
                
               $count++;
            }
           ?>  
            </div>
        </div>
        <hr>

        <!-- Footer -->
        <footer>
            
        </footer>

    </div>
    <!-- /.container -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>