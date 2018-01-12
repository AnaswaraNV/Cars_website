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
		<h2> Remove From Inventory </h2>
		<p> Remove any product from the inventory </p>
		<table  border=2>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
			<tr>
				<td>100000</td>
				<td> 
					<h5> Audi A3 </h5> 
					<img class="table-image" src="images/audi_A3_image.jpg" Alt="Audi A3">
				</td>
				<td>45,300.00CAD</td>
				<td> 150 </td>
				
			</tr>
			<tr>
				<td>200000</td>
				<td> 
					<h5> Audi R8 </h5> 
					<img class="table-image" src="images/Audi_R8_image.jpg" Alt="Audi R8">
				</td>
				<td>2,229,500.00CAD</td>
				<td> 200 </td>
				
			</tr>
			<tr>
				<td>300000</td>
				<td> 
					<h5> BMW i3 </h5> 
					<img class="table-image" src="images/bmw_i3_image.jpg" Alt="BMW i3">
				</td>
				<td>45,445.00CAD</td>
				<td> 140 </td>
				
			</tr>
			<tr>
				<td>400000</td>
				<td> 
					<h5> BMW x6 </h5> 
					<img class="table-image" src="images/bmw_x6_image.jpg" Alt="BMW X6">
				</td>
				<td>63,695.00CAD</td>
				<td> 20 </td>
				
			</tr>
			<tr>
				<td>500000</td>
				<td> 
					<h5> Ferrari Corporate </h5> 
					<img class="table-image" src="images/Ferrari_corporate.jpg" Alt="Ferrari Corporate">
				</td>
				<td>6,439,500.00CAD</td>
				<td> 5 </td>
				
			</tr>
			<tr>
				<td>600000</td>
				<td> 
					<h5> Ferrari Enzo </h5> 
					<img class="table-image" src="images/ferrari_enzo.jpg" Alt="Ferrari Enzo">
				</td>
				<td>6,567,500.00CAD</td>
				<td> 25 </td>
				
			</tr>
			<tr>
				<td>700000</td>
				<td> 
					<h5>Jaguar Polaris </h5> 
					<img class="table-image" src="images/background_image_spotlight.jpg" Alt="Jaguar Polaris">
				</td>
				<td>3,459,500.00CAD</td>
				<td> 0 </td>
				
			</tr>
			<tr>
				<td>800000</td>
				<td> 
					<h5> Jeep Wrangler </h5> 
					<img class="table-image" src="images/jeep_wrangler_image.jpg" Alt="Jeep Wrangler">
				</td>
				<td>7,345,500.00CAD</td>
				<td> 10 </td>
				
			</tr><tr>
				<td>900000</td>
				<td> 
					<h5> Lamborghini Serano </h5> 
					<img class="table-image" src="images/Lamborghini_yellow.jpg" Alt="Lamborghini Serano">
				</td>
				<td>25,229,500.00CAD</td>
				<td> 2 </td>
				
			</tr>
			<tr>
				<td>110000</td>
				<td> 
					<h5> Mercedes Benz Wagon </h5> 
					<img class="table-image" src="images/mercedes_benze_g_wagon_iamge.jpg" Alt="Mercedez Benz Wagon">
				</td>
				<td>10,456,321.00CAD</td>
				<td> 4 </td>
				
			</tr>
		</table>
		
	</section>
	<?php 
		include("footer.html");
	?>
</body>
</html>