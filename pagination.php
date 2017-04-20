<?php
include_once('php/db_conx.php');
	/*
		Place code to connect to your DB here.
	*/
		// include your code to connect to DB.

	$tbl_name="locations";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
    $query="SELECT id,building_address,zip_code,police_district,council_district,owner,Addressuse,mailing_address FROM locations";
	
    $dbResult=mysqli_query($db_conx,$query);
	$total_pages = mysqli_num_rows($dbResult);
	
	
	/* Setup vars for query. */
	$targetpage = "showLocation.php"; 	//your file name  (the name of this file)
	$limit = 15; 								//how many items to show per page
	
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT id,building_address,zip_code,police_district,council_district,owner,Addressuse,mailing_address FROM $tbl_name ORDER BY council_district LIMIT $start, $limit";
	$result = mysqli_query($db_conx,$sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;


    $indivtotal=($total_pages/$limit);//next page is page + 1
	$lastpage = ceil($indivtotal);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "
        <ul class=\"pagination\">
        <li class=\"page-item\">
        
        ";
		//previous button
		if ($page > 1) 
           
			$pagination.= "<a class=\"page-link\" href=\"$targetpage?page=$prev\" aria-label=\"Previous\"> <span aria-hidden=\"true\">&laquo;</span>
        <span class=\"sr-only\">Previous</span>
      </a></li>";
		else
			$pagination.= "";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li class=\"page-item\"><span class=\"current\">$counter</span></li>";
					else
						$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
				}
				$pagination.= "";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=1\">1</a></li>";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=2\">2</a></li>";
				$pagination.= "";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li class=\"page-item\"><span class=\"current\">$counter</span></li>";
					else
						$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
				}
				$pagination.= "";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=1\">1</a></li>";
				$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=2\">2</a></li>";
				$pagination.= "";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<li class=\"page-item\"><span class=\"current\" hidden>$counter</span></li>";
					else
						$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$counter\">$counter</a></li>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<li class=\"page-item\"><a href=\"$targetpage?page=$next\" aria-label=\"Next\">
        <span aria-hidden=\"true\">&raquo;</span>
        <span class=\"sr-only\">Next</span>
      </a>";
		else
			$pagination.= "<span class=\"disabled\">Next </span>";
		$pagination.= " </ul>\n";		
	}
?>


