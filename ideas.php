<?php 
 include_once("php/check_login_status.php");
 include_once("php/db_conx.php");
 
//List ideas for user


 
 
 
 /* if($user_ok == true){
 	header("location: http://cheatingornah.com/searchSpouse.php?u=".$_SESSION["username"]);
 	exit(); */
//}
$userid=$_GET["u"];
function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>idea</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/navigation.css">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
      <style>
.container {
	margin-top: 55px;
	background-image: url("img/whiteBG.png");
	background-repeat: repeat;
}

.input [type=text] {
	width: 10px;
}

.panel {
	width: 100%;
}

.panel-shadow {
	box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
}

.panel-white {
	border: 1px solid #dddddd;
}

.panel-white  .panel-heading {
	color: #333;
	background-color: #fff;
	border-color: #ddd;
}

.panel-white  .panel-footer {
	background-color: #fff;
	border-color: #ddd;
}

.post .post-heading {
	height: 85px;
	background-color: #f2f1ef;
}

.post .post-heading .avatar {
	width: 60px;
	height: 60px;
	display: block;
	margin-right: 15px;
}

.post .post-heading .meta .title {
	margin-left: 0px;
	margin-bottom: 0;
}

.post .post-heading .meta .title a {
	color: #000;
}

.post .post-heading .meta .title a:hover {
	color: #0099FF;
}

.post .post-heading .meta .time {
	margin-top: 8px;
	color: #8b6441;
}

.post .post-color {
	border-radius: 50%;
	width: 60px;
	height: 60px;
	background: <?php echo rand_color()?>;
	margin-right: 15px;
	margin-left:10px;
	margin-top:10px;
	-webkit-box-shadow: 4px 6px 47px 0px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: 4px 6px 47px 0px rgba(0, 0, 0, 0.33);
	box-shadow: 4px 6px 47px 0px rgba(0, 0, 0, 0.33);
}

.post .post-description {
	padding: 15px;
}

.post .post-description p {
	font-size: 18px;
}

.post .post-description .stats {
	margin-top: 10px;
}

.post .post-description .stats .stat-item {
	display: inline-block;
	margin-right: 15px;
}

.post .post-description .stats .stat-item .icon {
	margin-right: 8px;
	color: #0099FF;
}

.post .post-footer {
	border-top: 1px solid #ddd;
	padding: 15px;
}

.progress {
	margin-top: 5px;
}

.container {
	margin-top: 20px;
	padding-top: 10px;
}

.container-fluid {
	margin-top: 50px;
}

.btn {
	font-family: 'Anton', sans-serif;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0px;
	-webkit-box-shadow: 2px 1px 22px #dbd8db;
	-moz-box-shadow: 2px 1px 22px #dbd8db;
	box-shadow: 2px 1px 22px #dbd8db;
	margin-top: 5px;
	color: #2e2e2e;
	font-size: 20px;
	background: #fafafa;
	padding: 5px 10px 5px 10px;
	text-decoration: none;
}

.search-Container {
	margin-top: 20px;
	padding-top: 25px;;
	height: 170px;
	background-color: #7fb884;
	-webkit-box-shadow: -1px 3px 31px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: -1px 3px 31px 0px rgba(0, 0, 0, 0.75);
	box-shadow: -1px 3px 31px 0px rgba(0, 0, 0, 0.75);
}

.searchBox input {
	height: 60px;
	width: 100%;
	padding: 10px 10 px;
	border-width: 1px;
	border-style: solid;
	font-size: 20px;
	border-radius: 0px;
	-webkit-box-shadow: 2px 11px 66px -4px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 2px 11px 66px -4px rgba(0, 0, 0, 0.75);
	box-shadow: 2px 11px 66px -4px rgba(0, 0, 0, 0.75);
}

.results {
	display: none;
	position: absolute;
	top: 55px;
	left: 0;
	right: 0;
	z-index: 10;
	padding: 0;
	margin: 0;
	border-width: 1px;
	border-style: solid;
	border-color: #ebebe0;
	border-radius: 5px;
	background-color: #fff;
	overflow: scroll;
	width: 100%;
	max-height: 200px;
}

.results li {
	display: block;
	padding: 10px;
}

.notification {
	border: none;
	-webkit-box-shadow: -3px 6px 20px -2px rgba(0, 0, 0, 0.73);
	-moz-box-shadow: -3px 6px 20px -2px rgba(0, 0, 0, 0.73);
	box-shadow: -3px 6px 20px -2px rgba(0, 0, 0, 0.73);
}

.notification .panel-heading {
	-webkit-box-shadow: -3px 6px 20px -2px rgba(0, 0, 0, 0.73);
	-moz-box-shadow: -3px 6px 20px -2px rgba(0, 0, 0, 0.73);
	box-shadow: -3px 6px 20px -2px rgba(0, 0, 0, 0.73);
}

.content-panel {
	-webkit-box-shadow: -1px 9px 20px -2px rgba(0, 0, 0, 0.69);
	-moz-box-shadow: -1px 9px 20px -2px rgba(0, 0, 0, 0.69);
	box-shadow: -1px 9px 20px -2px rgba(0, 0, 0, 0.69);
	border: none;
}

.main-containt {
	background-color: #e5efff;
}

.panel-navigation {
	background-color: #3366CC;
	font-size: 20px;
	-webkit-box-shadow: 1px 6px 28px -5px rgba(0, 0, 0, 0.49);
	-moz-box-shadow: 1px 6px 28px -5px rgba(0, 0, 0, 0.49);
	box-shadow: 1px 6px 28px -5px rgba(0, 0, 0, 0.49);
	font-family: 'Fjalla One', sans-serif;
}
.img-responsive {
        margin: 0 auto;
       }
#idea {
	font-size: 20px;
	font-family: 'Exo 2', sans-serif;
}
         
</style>
  </head>
  <body>
  <?php include_once("navigation.php");?>
  <span id="userid"><?php echo $userid;?></span>
 
   
     
     
     <div class="container-fluid search-Container">
       <dvi class="row">
           <div class="col-sm-0 col-md-2 col-lg-3"></div>
           <div class="col-sm-12 col-md-8 col-lg-7">
             <form action="">
                 <div class="form-group searchBox">
                 <input  id="search" type="text" class="form-control" placeholder="Search for location ..." />
                 <ul class="results" >	
                 </ul>
                  </div>
              </form>
           </div>   
       </dvi>
    </div>
      
    
      <div class="container">
                  
<div class="row profile-space">
<div class="col-md-4 col-lg-4">
    <div class="container">
   <div class="row">
       <div class="col-md-4 col-lg-4">
    <div class="panel panel-default notification">
	  
		<div class="panel-body">
		         <img src="img/default.png" class="img-responsive img-circle" alt="Cinque Terre" width="200" height="200"> 
            <div class="row">
          <div class="col-xs-4 col-sm-4 col-md-4"><h4 class=" text-center ">Follower</h4><p class=" text-center ">123</p></div>
          <div class="col-xs-4 col-md-4"><h4 class=" text-center">Freinds</h4><p class=" text-center">120</p></div>
          <div class="col-xs-4 col-md-4"><h4 class=" text-center">Points</h4><p class=" text-center">123</p></div>
        
      </div>
	     </div>
        
        
           </div>
    </div>
        </div>
    
    <div class="row">
       <div class="col-md-4 col-lg-4">
       <div class="panel panel-default notification">
	  <div class="panel-heading">
	    <h3 class="panel-title text-center">Notifications</h3>
	    </div>
		<div class="panel-body">
			<div class="alert alert-success">
		      <strong class="default"><i class="fa fa-road"></i> Well done,</strong> You have finished Project!
		      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    </div>
		    
		  
		   <!--  <div class="alert alert-danger">
		      <strong class="default"><i class="fa fa-hdd-o"></i> Server </strong> reported problems.
		      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    </div> -->
		    <!-- <div class="alert alert-info nomargin">
		      <strong class="default"><i class="fa fa-money"></i> Received </strong> $1826 from client.
		      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    </div> -->
            <div class="alert alert-info nomargin">
		      <strong class="default"><i class="fa fa-comment "></i> Comment </strong> Bob has made a comment on project x
		      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    </div>
           </div>
	  </div>
       
       </div>
    
    </div>
    
    </div>
</div>
 
    <div class="col-md-8 col-lg-8 check">
    
      <div class="panel panel-default content-panel">
		<div class="panel-body">
            
              <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                          <form action=""  onsubmit="return false;" >
                           <textarea ty class="form-control" id="idea" name="Description" rows="5" placeholder="Any idea..."></textarea>
                           <span id="IdeaPostresult"></span>
                          <button type="submit" class="btn btn-primery pull-right" onclick="postIdea()">Post Idea</button>
                          </form>
                   </div>
                  </div>
              </div>
            
              <hr>
             <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading panel-navigation">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Ideas</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Projects</a></li>
                            <li><a href="#tab3default" data-toggle="tab">My Projects</a></li>
                            <li><a href="#tab4default" data-toggle="tab">Inbox</a></li>
                            
                        </ul>
                </div>
                <div class="panel-body main-containt">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                         <div class="row">    
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">
                                        <div class="pull-left ">
                                            <div class="post-color"  style="           
                                               background: <?php echo rand_color()?>;">
                                            </div>     
                                        </div>
                                        <div class="pull-left meta">
                                            <div class="title h5">
                                                <a href="#"><b>Jhone</b></a>
                                                made a post.
                                            </div>
                                            <h6 class="text-muted time">1 minute ago</h6>
                                             <h4><span class="label label-info pull-left">Idea</span></h4>
                                        </div>
                                    </div> 
                                    <div class="post-description"> 
                                        <p class="text-center">Food drive?</p>
                                         <div class="stats">
                                            <a href="#" class="btn ">
                                                <i class="fa fa-thumbs-up icon"></i>2
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                            <div class="row">    
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">
                                        <div class="pull-left ">
                                            <div class="post-color"  style="           
                                               background: <?php echo rand_color()?>;">
                                            </div>     
                                        </div>
                                        <div class="pull-left meta">
                                            <div class="title h5">
                                                <a href="#"><b>Jhone</b></a>
                                                made a post.
                                            </div>
                                            <h6 class="text-muted time">1 minute ago</h6>
                                             <h4><span class="label label-info pull-left">Idea</span></h4>
                                        </div>
                                    </div> 
                                    <div class="post-description"> 
                                        <p class="text-center">Food drive?</p>
                                         <div class="stats">
                                            <a href="#" class="btn ">
                                                <i class="fa fa-thumbs-up icon"></i>2
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                            <div class="row">    
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="panel panel-white post panel-shadow">
                                    <div class="post-heading">
                                        <div class="pull-left ">
                                            <div class="post-color"  style="           
                                               background: <?php echo rand_color()?>;">
                                            </div>     
                                        </div>
                                        <div class="pull-left meta">
                                            <div class="title h5">
                                                <a href="#"><b>Jhone</b></a>
                                                made a post.
                                            </div>
                                            <h6 class="text-muted time">1 minute ago</h6>
                                             <h4><span class="label label-info pull-left">Idea</span></h4>
                                        </div>
                                    </div> 
                                    <div class="post-description"> 
                                        <p class="text-center">Food drive?</p>
                                         <div class="stats">
                                            <a href="#" class="btn ">
                                                <i class="fa fa-thumbs-up icon"></i>2
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
            <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left ">
                                <div class="post-color"  style="           
                                   background: <?php echo rand_color()?>;">
                                </div>     
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Ryan Haywood</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">1 minute ago</h6>
                                 <h4><span class="label label-info pull-left">Idea</span></h4>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p class="text-center">Art compution ?</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
                        
                        
                        
                    
                        <div class="tab-pane fade" id="tab2default">
                    <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left ">
                                <div class="post-color"  style="           
                                   background: <?php echo rand_color()?>;">
                                </div>     
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Ryan Haywood</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">1 minute ago</h6>
                                 <h4><span class="label label-info pull-left">Project</span></h4>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p class="text-center">painting workshop ?</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left ">
                                <div class="post-color"  style="           
                                   background: <?php echo rand_color()?>;">
                                </div>     
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Jhone</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">6 minute ago</h6>
                                 <h4><span class="label label-info pull-left">Project</span></h4>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p class="text-center">Project test 1</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left ">
                                <div class="post-color"  style="           
                                   background: <?php echo rand_color()?>;">
                                </div>     
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Dave</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">9 minute ago</h6>
                                 <h4><span class="label label-info pull-left">Project</span></h4>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p class="text-center">Project test 2</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left ">
                                <div class="post-color"  style="           
                                   background: <?php echo rand_color()?>;">
                                </div>     
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>JOjo</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">10 minute ago</h6>
                                 <h4><span class="label label-info pull-left">Project</span></h4>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p class="text-center">Project test 3</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                    
                    <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                        <div class="post-heading">
                            <div class="pull-left ">
                                <div class="post-color"  style="           
                                   background: <?php echo rand_color()?>;">
                                </div>     
                            </div>
                            <div class="pull-left meta">
                                <div class="title h5">
                                    <a href="#"><b>Bob</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">14 minute ago</h6>
                                 <h4><span class="label label-info pull-left">Project</span></h4>
                            </div>
                        </div> 
                        <div class="post-description"> 
                            <p class="text-center">Project test 4</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                    
                    </div>
                        <div class="tab-pane fade" id="tab3default">
                        
                        <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                    
                        <div class="post-description"> 
                            <p class="text-center">My Project test 1</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
                        <div class="row">    
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-white post panel-shadow">
                    
                        <div class="post-description"> 
                            <p class="text-center">My Project test 2</p>
                             <div class="stats">
                                <a href="#" class="btn ">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
                        </div>
                        <div class="tab-pane fade" id="tab4default">
                        
                        Inbox is empty...
                        
                        
                        </div>
                    </div>
                </div>
           
			
	  </div>
    </div>
          
    
    
    </div>
    
    
    
    
          </div>
   <!-- <div class="row clikable">
        <a href="home.php">
        <div class="col-sm-0 col-md-2 col-lg-2">
        </div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="panel panel-white post panel-shadow">
            <div class="post-heading">
                <div class="pull-left image">
                    <div class="post-color">

                    </div>
                    
                </div>
                <div class="pull-left meta">
                   <?php
                    
                    echo rand_color();
                    
                    ?>
                   
                </div>
            </div> 
            <div class="post-description"> 
                <p class="text-center">How to fix problems in Baltimore </p>
                <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                    </a>
                </div>
            </div>
        </div>
    </div>
      </a>
   </div>      -->
          
          <!-- ROw 2-->
              <!--<div class="row">
        <div class="col-sm-0 col-md-2 col-lg-2">
        </div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="panel panel-white post panel-shadow">
            <div class="post-heading">
                <div class="pull-left image">
                    <div class="post-color"  style="           
    background: <?php echo rand_color()?>;">

                    </div>
                    
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                     <h4><span class="label label-info pull-left">Project</span></h4>
                </div>
            </div> 
            <div class="post-description"> 
                <p class="text-center">Art compution ?</p>
                <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                    </a>
                     
                </div>
                
            </div>
        </div>
    </div>
   </div>-->
     
             <!-- ROw 2-->
         <!--     <div class="row">
        <div class="col-sm-0 col-md-2 col-lg-2">
        </div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="panel panel-white post panel-shadow">
            <div class="post-heading">
                <div class="pull-left image">
                    <div class="post-color"  style="           
    background: <?php echo rand_color()?>;">

                    </div>
                    
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        <a href="#"><b>Obama</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                     <h4><span class="label label-info pull-left">Project</span></h4>
                </div>
            </div> 
            <div class="post-description"> 
                <p class="text-center">Organize a food drive! </p>
                <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                        <i class="fa fa-share icon"></i>12
                    </a>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                      aria-valuemin="0" aria-valuemax="100" style="width:70%">
      <br>
    <span class="sr-only">70% Complete</span>
  </div>
</div>


                </div>
            </div>
        </div>
    </div>
   </div> -->
          
          
                <!-- ROw 2-->
        =
          
          
         <!-- ROw 2-->
      </div>
     
         
       <div class="footer text-center">
      
      <h5> Copyright 2017 WWYDH</h5>
      
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
      <script>
      function _(x){
	       return document.getElementById(x);
      }

      $("#idea").focus(function(){
    	    $("#IdeaPostresult").empty();
    	});
      
      function postIdea(){
               var idea=_("idea").value;
           
               var userid=$("#userid").text();
              
  		   if(!idea==""){
               var ajax = ajaxObj("POST","php/postIdea.php");
               ajax.onreadystatechange = function() {
                   if(ajaxReturn(ajax) == true) {
                	   $("#IdeaPostresult").empty();//empty the result status 
                         _("IdeaPostresult").innerHTML=ajax.responseText;//reponse from postid.php
                         $("#idea").val("");//Clear the input filed
                         $("#tab1default").empty();//empty 
                         getIdeas();
                    }else{
                    	 
                 }
                   
               }
  		   }else{
  			 $("#IdeaPostresult").empty();
             _("IdeaPostresult").innerHTML="Textarea is empty";
  	  		}
               ajax.send("idea="+idea+"&userid="+userid);
               }


      function getIdeas(){
    	  var ajax = ajaxObj("GET","php/postIdea.php");
          ajax.onreadystatechange = function() {
              if(ajaxReturn(ajax) == true) {
           	   $("#IdeaPostresult").empty();
                    _("tab1default").innerHTML=ajax.responseText;
               }else{
               	 
            }
              
          }
          ajax.send(null);

          }
               
      getIdeas();
      $(document).ready(function(){ 
            $("#search").keyup(function(){
             var search =$("#search").val();
               if($.trim(search.length) == 0){
                  $('.results').css("display","none");  
               }else{
                    var ajax = ajaxObj("POST","search.php");
                    ajax.onreadystatechange = function() {
                   if(ajaxReturn(ajax) == true) {
                         $('.results').css("display","block");
                        $('.results').html(ajax.responseText);
                  
                    }
                 }
                   
               ajax.send("search="+search);
               }


         
            
            });
             });
      
      
      </script>
  </body>
</html>