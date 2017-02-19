<?php 
	function test($class,$min,$max)
	{	$con=mysqli_connect("localhost","root","","test");
		// Check connection
				if (mysqli_connect_errno($con))
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
		if($class==Null&&$min==null&&$max==null){
			$sql = mysqli_query($con,"SELECT * FROM ads");
		}
		else if($class!=Null&&$min==null&&$max==null)
		{
			$sql= mysqli_query($con,"SELECT * FROM ads WHERE class = '$class'");
		}
		else if($class==Null&&$min!=null&&$max!=null)
		{
			$sql= mysqli_query($con,"SELECT * FROM ads WHERE price BETWEEN $min AND $max");
		}
		else 
		{
			$sql= mysqli_query($con,"SELECT * FROM ads WHERE class = '$class' AND price BETWEEN $min AND $max");
		}
		//if (!$check1_res) {
		// printf("Error: %s\n", mysqli_error($con));
		//exit();}
		global $nr;
		//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
		$nr = mysqli_num_rows($sql); // Get total of Num rows from the database query
		
		if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
			$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
			//$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
		} else { // If the pn URL variable is not present force it to be value of page number 1
			$pn = 1;
		} 
		
		//This is where we set how many database items to show on each page 
		$itemsPerPage = 12; 
		// Get the value of the last page in the pagination result set
		$lastPage = ceil($nr / $itemsPerPage);
		// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
		if ($pn < 1) { // If it is less than 1
			$pn = 1; // force if to be 1
		} else if ($pn > $lastPage) { // if it is greater than $lastpage
			$pn = $lastPage; // force it to be $lastpage's value
		} 
		
		// This creates the numbers to click in between the next and back buttons
		// This section is explained well in the video that accompanies this script
		$centerPages = "";
		$sub1 = $pn - 1;
		$sub2 = $pn - 2;
		$add1 = $pn + 1;
		$add2 = $pn + 2;
		if ($pn == 1) {
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
		} else if ($pn == $lastPage) {
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
		} else if ($pn > 2 && $pn < ($lastPage - 1)) {
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';
		} else if ($pn > 1 && $pn < $lastPage) {
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';
			$centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
			$centerPages .= '&nbsp; <a href="?r='.$class.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
		}
		// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
		$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
		// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
		// $sql2 is what we will use to fuel our while loop statement below
		$result=Null;
		if($class==Null&&$min==null&&$max==null){
			$result = mysqli_query($con,"SELECT * FROM ads $limit");
		}
		else if($class!=Null&&$min==null&&$max==null)
		{
			$result = mysqli_query($con,"SELECT * FROM ads WHERE class = '$class' $limit");
		}
		else if($class==Null&&$min!=null&&$max!=null)
		{
			$result = mysqli_query($con,"SELECT * FROM ads WHERE price BETWEEN $min AND $max $limit");
		}
		else 
		{
			$result = mysqli_query($con,"SELECT * FROM ads WHERE class = '$class' AND price BETWEEN $min AND $max $limit");
		}
		//$sql2 = mysql_query("SELECT id, firstname, country FROM myTable ORDER BY id ASC $limit"); 
		//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
		///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
		global $paginationDisplay; 
		$paginationDisplay="";// Initialize the pagination output variable
		// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
		if ($lastPage != "1"){
			// This shows the user what page they are on, and the total number of pages
			$paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
			// If we are not on page 1 we can place the Back button
			if ($pn != 1) {
				$previous = $pn - 1;
				$paginationDisplay .=  '&nbsp;  <a href="?r='.$class.'&pn=' . $previous . '"> Back</a> ';
			} 
			// Lay in the clickable numbers display here between the Back and Next links
			$paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
			// If we are not on the very last page we can place the Next button
			if ($pn != $lastPage) {
				$nextPage = $pn + 1;
				$paginationDisplay .=  '&nbsp;  <a href="?r='.$class.'&pn=' . $nextPage . '"> Next</a> ';
			} 
		}
		///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
		
		
		global $a;
		if($result!=""){
		while($row = mysqli_fetch_array($result))
		{
		$title = $row['ad_title'];
		$pic = $row['photos'];
		$price = $row['price'];
		$id = $row['id'];
		$loc=$row['location'];
		
		$arry=explode(',',$pic,3);
				
		echo '<div class="post thumbnail row-fluid">
				<a href="singlepost.php?q='.$id.'">
					<div class="col-sm-4">
						<img src="upload/'.$arry[1].'" alt="product" class="img-responsive">
					</div>
					<div class="caption col-sm-8">
						<h3>'.$title.'</h3>
						<span class="price"> &#8377; '.$price.'</span>
						<span class="postloc">'.$loc.'</span>
					</div>
				</a>
			</div>';
		
		}
		}
		else{
			echo "You are looking for something that isn't here!";
		}
		mysqli_close($con);
	}
	
	
?>