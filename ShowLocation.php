<?php

include_once("pagination.php");


?>
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
       <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
     
      <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="css/navigation.css">
      <style>
          body{
        font-family: 'Fjalla One', sans-serif;
    }
          .container{
              margin-top:90px;
          }
          iframe{
              width: 100%;
              height: 770px;
             padding: 0px;
              border: none;
          }
          th{
              font-size: 16px;
              font-family: 'Bree Serif', serif;
          }
          tr{
              font-size: 14px
          }
      
      </style>
     
  </head>
  <body> <?php include_once("navigation.php");?>
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">Locations Listing</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg12">
             <table class="table table-bordred table-striped ">
                    <thead>
                      <tr>
                        <th>Buillding Address</th>
                        <th>Zip Code</th>
                        <th>Police District</th>
                        <th>Council District</th>
                        <th>Use</th>
                        <th>Owner</th>  
                      </tr>
                    </thead>
                    <tbody><?php 
                           
 
                while($row = mysqli_fetch_array($result))
                {
                
                 echo   '<tr>
                     <td><a href="#message" data-toggle="modal" id="showModal'.$row["id"].'">'.$row["building_address"].'<p hidden>'.$row["id"].'</p></a>
                     </td>
                     <td>'.$row["zip_code"].'</td>
                     <td>'.$row["police_district"].'</td>
                       <td>'.$row["council_district"].'</td>
                     <td>'.$row["Addressuse"].'</td>
                     <td>'.$row["owner"].'</td>
                 </tr>';
                
                }
                        ?>
                     </tbody>
                 </table>
             </div>
          </div>                 
        <?php echo $pagination;?>              
        </div>
      <div class="footer text-center">
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
     <script type="text/javascript">
          $('body').append(
          '<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">\
            <div class="modal-dialog modal-md">\
              <div class="modal-content">\
                <div class="modal-header">\
                  <button type="button"\
                          class="close"\
                          data-dismiss="modal"\
                          aria-label="Close">\
                    <span aria-hidden="true">&times;</span></button>\
                </div>\
                <div class="modal-body">\
                  <iframe id="messageif" srcdoc="<p>Loading...</p>">\
                  </iframe>\
                </div>\
              </div>\
            </div>\
          </div>'
          );
         
         $('a[id^=showModal]').on('click', function(){
             
              var x = document.getElementById("messageif");     
              var y = (x.contentWindow || x.contentDocument);
              if (y.document)y = y.document;
              var id=$(this).find("p").text();
             
              var ajax = ajaxObj("POST","LocationDetail.php");
                 ajax.onreadystatechange = function() {
                   if(ajaxReturn(ajax) == true) {
                           $("#messageif").empty();
                      
                           $("body", y).html(ajax.responseText);
                        //$('.results').html(ajax.responseText);
                  
                    }
                 }
                   
               ajax.send("id="+id);
               
             
             
             
            // y.body.style.backgroundColor = "red";
              //y.body.innerHTML=''+id;
             
            // now start doing normal jQuery:
          //  $("body", y).innerHTML("loading");
               
        
           }); 
         
     
    </script> 
  </body>
</html>