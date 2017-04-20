
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
       
          .container{
              margin-top:90px;
          }
         
      </style>
     
  </head>
  <body> <?php include_once("navigation.php");?>
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">New Project</h1>
            </div>
          </div>
            <div class="row">
            <div class="col-lg-12">
<form class="form-horizontal"  role="form" method="post" enctype="multipart/form-data" action="php/postProject.php" >
<fieldset>


<!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


<!-- Form Name -->
<legend>Creat Project</legend>

<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="project leader" class="control-label col-sm-2">Project Leader</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="" name="project-leader" placeholder="project leader">
    
  </div>
</div>
<!-- Textarea http://getbootstrap.com/css/#textarea -->
<div class="form-group">
  <label class="control-label col-sm-2" for="location">Location</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="location" placeholder="location in Baltimore area">
   <!-- <textarea class="form-control" id="" name="location" rows="5">location in Baltimore area</textarea>-->
    
  </div>
</div>

<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="Description " class="control-label col-sm-2">The Project Description</label>
  <div class="col-sm-10">
    <textarea class="form-control" id="" name="description" rows="5" placeholder="a brief description of your project "></textarea>
    
  </div>
</div>
<div class="form-group steps">
  <label for="steps" class="control-label col-sm-2">The Steps</label>
  
    
    <div class="col-sm-10">
    <input type="text" class="form-control" id="" placeholder="Steps you would take " name="step0"> <button class="btn btn-primary btn-sm pull-right add_field_button_2 pull-right">Add Step</button>
    </div> 
    
    <input class="numOfSteps" name="numOfSteps">
    
    
</div>   
<div class="form-group">
  <label for="why" class="control-label col-sm-2">Why are you doing it ?</label>
  <div class="col-sm-10">
   <textarea class="form-control" id="" name="why" rows="5" placeholder="why is this project important to you"></textarea>  
  </div>
    
    

    
</div>
<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="Calculated_cost" class="control-label col-sm-2">Calculated Cost</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="Calculated_cost" name="cost" placeholder="calculated cost estimate">
    
  </div>
</div>
    
<div class="form-group">
  <label for="potential_cost " class="control-label col-sm-2">Starting Date </label>
  <div class="col-sm-10">
    <input class="form-control form-control-lg" type="date" value="2011-08-19" name="startDate" id="example-datetime-local-input">
    
  </div>
    
</div>

    

    
<div class="form-group">
  <label for="end date " class="control-label col-sm-2">End Date </label>
  <div class="col-sm-10">
    <input class="form-control form-control-lg"name ="endDate" type="date" value="2011-08-19">
    
  </div>
    
</div>
<div class="form-group">
  <label for="crowdfunding" class="control-label col-sm-2">Crowdfunding Link</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="" placeholder="if you have a cordfunding websit page put the link here" name="crowdfunding">
    </div>
</div>

    
    
    
    
    
    
<div class="form-group Volunteer">
  <label for="Calculated_cost" class="control-label col-sm-2">Personel needed</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="Calculated_cost" name="volenter0"placeholder="like lawyer,construction worker,..."> <button class="btn btn-primary btn-sm pull-right add_field_button pull-right">Add More Volunteer</button>
    </div>
    <input class="numOfvol" name="numOfvol">
</div>
    
    
    
    
    
    <div class="form-group">
    <label class="control-label col-sm-2">Picture Related to the Project</label>
        <div class="col-sm-9">
        
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
    </div>
    
    

</fieldset>
      <!--<button type="submit" class="btn btn-primary btn-lg pull-right" >Submit</button>-->
     <input type="submit" value="Upload Image" name="submit">
</form>
            </div>
          </div>
                  
        </div>
      <div class="footer text-center">
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
   <script>
      $(document).ready(function() {
          
            
          
          
    
          
          
          
    var max_fields      = 20; //maximum input boxes allowed
    var wrapper         = $(".Volunteer"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button 
        var add_button2      = $(".add_field_button_2"); //Add button ID
    var wrapper2         = $(".steps"); //Fields wrapper     
 
        

    var x = 1; //initlal text box count
    var y=1;
          
    wrapper2.find(".numOfSteps").val(y);     
    wrapper.find(".numOfvol").val(x); 
          
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            
            $(wrapper).append('<div class="col-sm-7 col-md-offset-2"><input type="text" class="form-control" id="" name="volenter'+x+'" placeholder="like lawyer,construction worker,..."><a href="#" class="remove_field">Remove</a></div>'); //add input box
            x++; //text box increment
                
             wrapper.find(".numOfvol").val(x);
        }
    });
    
      $(add_button2).click(function(e){ //on add input button click
        e.preventDefault();
        if(y < max_fields){ //max input box allowed
             
            $(wrapper2).append('<div class="col-sm-7 col-md-offset-2"><input type="text" class="form-control" id="" name="step'+y+'" placeholder="like lawyer,construction worker,..."><a href="#" class="remove_field">Remove</a></div>'); //add input box
            y++; //text box increment
              wrapper2.find(".numOfSteps").val(y);
           
        }
    });  
       
       
       
       
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
      
      
      
    </script>
    
  </body>
</html>