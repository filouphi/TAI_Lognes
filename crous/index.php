<html>


<body>
                  <table style=" border-color: blue ; " border="25"    >
					
					
					<?php

				  
				
			$connect=mysqli_connect("localhost","root","","crous");
			mysqli_set_charset($connect,'utf8');

			$requete="select date,service,type,plats from menu Where date='2017-02-15';";

			$query=mysqli_query( $connect,$requete );
			
			
			while( $col=mysqli_fetch_array ( $query )){
				
						$date=$col["date"];
						$service=$col["service"];
						$type=$col["type"];
						$plats=$col["plats"];
						
						echo    "<tr>
									<td> $date </td>
									<td> $service </td>
									<td> $type </td>
									<td>$plats</td>
						 
								</tr> "; 
						
						
				
													}
		
		
		?>
 

</body>
</html>












</body