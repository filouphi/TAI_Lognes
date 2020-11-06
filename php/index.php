<!DOCTYPE html>
<html>
<head>
	<title>boutik.com</title>
	<style>
	
	
	
	</style>
	
	
	
</head>
<body>

	<h1> Manara shop</h1>
	<p>specialiste des affiches et figurines Manara</p>

<?php
   
	$connect=mysqli_connect("localhost","root","","boutik");
		
	$requete="select distinct categorie from produits ";

	$query=mysqli_query( $connect,$requete );
			
	while( $col=mysqli_fetch_array ( $query )){
				
		$categorie=$col["categorie"];
										
		echo "<a href=\"cat.php?cat=$categorie\">$categorie</a> <br>"; 
	}
		
		
?>
 


















</body>
</html>
