<html>
<body>
	
		<?php
		$imageDir = "http://zenit.senecac.on.ca/~uli705_173a14/assign2/part2/sample/";
			$images = glob('http://zenit.senecac.on.ca/~uli705_173a14/assign2/part2/sample/*.jpg');
			$flag=1;
			foreach ($images as $image){
				//$image = $results_row['photo'];
				if (empty($image)) $image = "default.jpg";
				<img src="/image/'.$image.'" width="50px" height="40px">
				//echo "<div ($flag?' active':''). '>";
				echo '"<img src= "'.$image.'" alt=" "></div>';
				$flag=0;
			}
			$files = glob("/home/uli705_173a14/public_html/assign2/part2/images/*.*");
				for ($i = 0; $i < count($files); $i++) {
					$image = $files[$i];
					$supported_file = array(
							'jpg',
							'jpeg'
						);

					$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
					if (in_array($ext, $supported_file)) {
						  //echo "<tr><td>";
						  echo basename($image);
						  //echo "</td><td>";
						  
						  //echo "</td></tr>";
			  /* while ($row = mysqli_fetch_array($result))
							{
								echo '<tr><td><img src="'.$row['image'].'"></td>' ;
							} */
							
							/* while ($row = mysql_fetch_assoc($result)) {
								echo '<tr><td><img src="'.$row['database_column_name'].'"></td>' ;
							}
					 */
			echo "<table border=6>";
			 for ($i=1;$i<=3;$i++)
			 {
			 echo "<tr><td>"; ?>
			 <img src= "http://zenit.senecac.on.ca/~uli705_173a14/assign2/part2/sample/image_<?php echo $i; ?>" /> 
			 <?php
			  /* $ages=array("10001"=>32, "Jim"=>30, "Ken"=>34);
			echo "Peter is " . $ages['Peter']. " years old"; */
			 echo "</td></tr>";
			}
			 echo "</table>";
			 ?>
			 
	
</body>
</html>
