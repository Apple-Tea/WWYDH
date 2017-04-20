
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
      <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
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
   
        .container{
            margin-top: 40px;
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
        }
        .panel-footer{
            background-color: #fff;
             border: 1px solid #f7f7f7;
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
     

  text-decoration: none;
         
}

.btn:hover {
  background: #f2f2f2;
  text-decoration: none;
}
        .piechart, .piechart2,.piechart3{
            
            font-family: 'Sansita', sans-serif;
        }
        
      </style>
   
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        
        function Council(){
               google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['District Council', 'Number of Vacant Buildings'],
          ['District : 1',     110],
          ['District : 2',      209],
          ['District : 3',  277],
          ['District : 4',  288],
          ['District : 5',  2343],    
          ['District : 6',  244],
          ['District : 7',  24],
          ['District : 8',  243],
          ['District : 9',  2678],
          ['District : 10',  297],
          ['District : 11',  782],
          ['District : 12',  562],
          ['District : 13',  265],
          ['District : 14',  245]
         
        ]);

        var options = {
          title: 'Vacant Buildings in City Council Member '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
            
            
            
            
        }
   Council();
     
        function policDistrict(){
            
        
          google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['District Council', 'Number of Vacant Buildings'],
          ['Centeral ',     110],
          ['Southeast',      209],
          ['Eastern',  277],
          ['Northeast',  288],
          ['Northern',  2343],    
          ['Northwest',  244],
          ['Western',  24],
          ['Southwest',  243],
          ['Southern',  2678]
         
         
        ]);

        var options = {
          title: 'Vacant Buildings in Police District '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      } 
        
        }
        
         function policDistrictCrime(){
            
        
          google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['District Council', 'Number of Vacant Buildings'],
          ['Centeral ',     110],
          ['Southeast',      209],
          ['Eastern',  277],
          ['Northeast',  288],
          ['Northern',  243],    
          ['Northwest',  244],
          ['Western',  124],
          ['Southwest',  243],
          ['Southern',  278]
         
         
        ]);

        var options = {
          title: 'Crime Rate by Police District '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      } 
        
        }
        
        
       policDistrict(); 
     policDistrictCrime();
        
    </script>
     <style>
      
      body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 0px;
  }
  #section1 {height:700px;color: #fff;}
  #section2 {height:500px;color: #fff; }
  #section3 {height:500px;color: #fff; }
  
      
      
      
      </style>
         <link type="text/css" rel="stylesheet" href="css/navigation.css">
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="0">
      
      
      
      
      
      
    <?php include_once("navigation.php");?>   
      
      
 <div class="container">
    
          
            
     
     
     
      <div class="row">
          <div class="col-md-12>">
          
          <nav class="navbar " data-spy="affix" data-offset-top="20">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Council</a></li>
          <li><a href="#section2">Police</a></li>
          <li><a href="#section3">Crime</a></li>
          
        </ul>
      </div>
    </div>
  </div>
</nav>    
          
          </div> 
     </div>
      
      
      
</div> 




<div id="section1" class="container">
   <div class="row">                         <!-- main col left --> 
              <div class="col-md-2"></div>
              <div class="col-md-9">
               <div id="piechart" style="width: 700px; height: 700px;"></div>
              </div>
</div>
<div id="section2" class="container">
  <div class="row"> 
                       <div class="col-md-2"></div>
               <div class="col-md-6">
               <div id="piechart2" style="width: 700px; height: 500px;"></div>
              
              
              </div>
     
          </div>
</div>
<div id="section3" class="container-fluid">
   <div class="row"> 
                       <div class="col-md-2"></div>
               <div class="col-md-6">
               <div id="piechart3" style="width: 700px; height: 500px;"></div>
              
              
              </div>
     
          </div>
</div>

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
      
      <div class="container">
          <div class="row">
                          
                         <!-- main col left --> 
              <div class="col-md-2"></div>
              <div class="col-md-9">
               <div id="piechart" style="width: 700px; height: 500px;"></div>
              
              
              </div>
              
              </div>          
            
                   <div class="row"> 
                       <div class="col-md-2"></div>
               <div class="col-md-6">
               <div id="piechart2" style="width: 700px; height: 500px;"></div>
              
              
              </div>
     
          </div>
      
                   <div class="row"> 
                       <div class="col-md-2"></div>
               <div class="col-md-6">
               <div id="piechart3" style="width: 700px; height: 500px;"></div>
              
              
              </div>
     
          </div>
      </div>
              <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
     
  </body>
</html>