<?php
//CLOSE DATABASE FUNCTION
function close_db_connection($link){
 if(mysqli_close($link)){
 // echo "<br> DATABASE CONNECTION HAS BEEN CLOSED </br>";
 }else{
 // echo "<br> DATABASE CONNECTION HAS NOT BEEN CLOSED </br>";
 }
} 

//SELECT DATABASE FUNCTION
function select_database($database_name,$connection_name){
    if(mysqli_select_db($connection_name,$database_name)){
      // echo "<br>".strtoupper($database_name)." HAS BEEN SELECTED";
    }else{
       // die("Unable to select database");
    }
    
}


$db_conx =  mysqli_connect("127.0.0.1", "pma", "");
// Evaluate the connection

select_database("csv_db",$db_conx);
$search=$_POST["search"];
$query="SELECT* FROM tbl_name WHERE building_address LIKE '%$search%'";
$result=mysqli_query($db_conx,$query);
$count=mysqli_num_rows($result);
$num=7;
if($count>0){
    while($row=mysqli_fetch_row($result)){
    
       echo '<li><a href="index.html"><span>'.$row[0].'</span></a></li>';
     
      
        
    }
}else{
    echo "Nothing found";
}
?>