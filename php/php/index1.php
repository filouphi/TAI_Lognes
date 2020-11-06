<html>


<body>
                  <table style=" border-color: blue ; " border="25"    >
		
		
			<form method="POST" action="insert.php">
		 
		 
	prenom:<br>
  <input type="text" name="prenom"><br>
  
	nom:<br>
	<input type="text" name="nom"><br>
	
ddn:<br>
	<input type="text" name="ddn"><br><br><br>
	  <input type="submit" value="Submit">
	<br><br><br><br><br>
  
  
  
			</form> 
		
		
		
		
		
		
		<?php

				  
				
			$connect=mysqli_connect("localhost","root","","porto");

			$requete="select id,nom,prenom,ddn from equipe";

			$query=mysqli_query( $connect,$requete );
			
			
			while( $col=mysqli_fetch_array ( $query )){
				
						$id=$col["id"];
						$nom=$col["nom"];
						$prenom=$col["prenom"];
						$ddn=$col["ddn"];
						
						echo    "<tr>
									<td> $id </td>
									<td> $prenom </td>
									<td> $nom </td>
									<td>$ddn</td>
						 
								</tr> "; 
						
						
				
													}
		
		
		?>
 

</body>
</html>












</body