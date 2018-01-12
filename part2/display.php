<!DOCTYPE html>
<html>
<!-- Below statement includes head tag details-->
<?php 	include("head.html"); 
?>
<body>
<!-- Body of the webpage defined below-->
<?php 	include("header.html"); 
?>

<section id="table">

		
		<h2> Inventory Table </h2>
		<p> Below are the existing collection of cars in stock. <p>
		<table  border=2>
		
		<?php
			//Including external database connection php file 
			include("databaseConnection.php");
			// Query to get the products table
			$query="SELECT * from products"; 
			
			$result=mysql_query($query, $dbhandler);
			
			//CSS class to give style to product images
			$class = 'table-image';
			
			// retrieve the result returned by the server
			// if table has some records, print data in table
			if ($row = mysql_fetch_array($result)) {
				//<td>%s</td>  in Id is to keep the leading zeroes
				echo "<tr>
						<td>Id</td>
						<td>Name</td>
						<td>Price</td>
						<td>Quantity</td>
					  </tr> ";
				do
					 {
					 printf("<tr>
								<td>%06d</td> 
								<td><h5>%s<h5> 	
								<img class='".$class."' src=%s />
								</td>
								<td>%0.2f</td>
								<td>%d</td>
							 </tr>\n",
					 $row[0],$row[1],$row[4],$row[2],$row[3]);
					 } 
			    while ($row = mysql_fetch_array($result));
				
			} else // If there are no products give error message
					 echo "The table is empty";
	?>
	</table>
	</section>
	<?php 
		include("footer.html");
	?>
	
</body>
</html>