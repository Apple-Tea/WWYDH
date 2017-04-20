<?php 
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
      
      <link href="https://fonts.googleapis.com/css?family=Scada" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      
      
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link href="css/navigation.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
      <style>
          .input [type=text]{
              width: 10px;
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
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
    
  margin-right: 15px;
}
.post .post-heading .meta .title {
   
    font-size: 13px;
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
  color: #0099FF;
}

          .post .post-color{
               border-radius: 50%;
               width: 60px;
    height: 60px;
    background: <?php echo rand_color()?>;
                 margin-right: 15px;            

    
          }
.post .post-description {
  padding: 15px;
  
}
.post .post-description p {
    font-family: 'Oswald', sans-serif;
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

.post .post-footer .input-group-addon a {
  color: #454545;
    
}
.post .post-footer .input-group-addon a:hover {
  color: #0099FF;
}
.post .post-footer .comments-list {
    
 font-family: 'Oswald', sans-serif;
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
    font-size:17px;
}
.post .post-footer .comments-list .comment {
   
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
  border-radius: 50%;
   
   
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 13px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
    font-family: 'Scada', sans-serif;
    font-size: 14px; 
  margin-left: 50px;
   
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
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
  font-size: 15px;
  background:#fafafa;
     
  padding: 5px 10px 5px 10px;
  text-decoration: none;
          
}

.btn:hover {
  background: #f2f2f2;
  text-decoration: none;
}
          .container{
              margin-top: 40px;
          }             
     
          
      </style>
  </head>
  <body>
        <?php include_once("navigation.php"); ?>
    
      <div class="container">
          
           
          <div class="row">
          
               <div class="col-md-12">
                  

<div class="container">
    <?php echo rand_color()?>
    <div class="row">
        <div class="col-sm-12 col-md-2 col-lg-2"></div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="panel panel-white post panel-shadow">
            <div class="post-heading">
                <div class="pull-left image">
                    <div class="post-color">
                    

                    </div>
                    
                </div>
                <div class="pull-left meta">
                    <div class="title h5">
                        
                        
                        <a href="#"><b>Ryan Haywood</b></a>
                        made a post.
                    </div>
                    <h6 class="text-muted time">1 minute ago</h6>
                </div>
            </div> 
            <div class="post-description"> 
                <p>How to fix problems in Baltimore </p>
                <div class="stats">
                    <a href="#" class="btn ">
                        <i class="fa fa-thumbs-up fa-lg icon"></i>2
                    </a>
                   
                </div>
            </div>
            <div class="post-footer">
                <div class="row">
                    <div class="col-sm-0 col-md-4">
                    </div>
                    
                    
                    <div class="col-sm-12 col-md-4">
               <div class="input-group"> 
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>  
                    </span>
                </div>
                    
                    </div>
                       <div class="col-sm-0 col-md-4">
                    </div>
                
                </div>
               
                <ul class="comments-list">
                    <li class="comment">
                       
                        <a class="pull-left" href="#">
                            <div class="avatar">
                            </div>
                        </a>
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">Antonyo</h4>
                                <h5 class="time">5 minutes ago</h5>
                            </div>
                            <p>an Baltimore and cities like it ever become good places to raise children? In the days since Freddie Gray’s death, there has been a great deal of discussion of police brutality, and for good reason. Yet there have also been questions about why large swaths of Baltimore are so persistently poor, and why children who grow up in the city’s poorest neighborhoods grow up to be poor themselves. The Harvard economists Raj Chetty and Nathaniel Hendren have recently </p>
                        </div>
                    </li>
                        <li class="comment">
                        <a class="pull-left" href="#">
                            <div class="avatar" style="           
    background: <?php echo rand_color()?>;">
                            </div>
                        </a>
                        
                         <div class="comment-body">
                             
                            <div class="comment-heading">
                                <h4 class="user">Gavino Free</h4>
                                <h5 class="time">5 minutes ago</h5>
                            </div>
                            <p>I’m sure there’s at least something to each of these explanations, but there is another problem that deserves consideration: Baltimore’s high property taxes are keeping the city poor. That’s right. If you want to make Baltimore more livable for poor children, cutting property taxes could be the best bet. </p>
                        </div>
                    
                     
                    </li>
                    <li class="comment">
                        <a class="pull-left" href="#">
                            <div class="avatar" style="           
    background: <?php echo rand_color()?>;">
                            </div>
                        </a>
                        
                         <div class="comment-body">
                             
                            <div class="comment-heading">
                                <h4 class="user">Gavino Free</h4>
                                <h5 class="time">5 minutes ago</h5>
                            </div>
                            <p>To understand why Baltimore’s property taxes might matter, it is first important to understand the mounting evidence that poor children benefit from growing up in non-poor neighborhoods. Chetty, Hendren, and their colleague Lawrence Katz draw on the Moving to Opportunity, or MTO, experiment, an ambitious effort to gauge the </p>
                        </div>
                    
                     
                    </li>
                    <li class="comment">
                        <a class="pull-left" href="#">
                            <div class="avatar" style="           
    background: <?php echo rand_color()?>;">
                            </div>
                        </a>
                        
                         <div class="comment-body">
                             
                            <div class="comment-heading">
                                <h4 class="user">Gavino Free</h4>
                                <h5 class="time">5 minutes ago</h5>
                            </div>
                            <p>If these findings aren’t reason enough to be concerned about the effects of being raised in a high-poverty neighborhood, the NYU sociologist Patrick Sharkey, author of Stuck in Place, has found evidence that these negative effects can be transmitted from one generation to the next. In other words, when we do nothing about the concentration of poverty in a given neighborhood, we’re not just damaging the lives of the children who live there today—we’re damaging the lives of their children. We can’t say definitively why this is the case, but one plausible explanation is that when poor kids interact with kids from better-off families, they’re in a much better position to learn about opportunities for advancement and to take advantage of them, and these effects build from generation to generation.</p>
                        </div>
                    
                     
                    </li>
                </ul>
            </div>
        </div>
    </div>
        </div>
</div>

               </div>
              
          
          </div>
          
    
      
      </div>
      
      
      
     
       <div class="footer text-center">
      
      <h5> Copyright 2017 WWYDH</h5>
      
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>