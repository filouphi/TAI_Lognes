<!DOCTYPE html>
<html>
<head>
	<title>boutik.com</title>
</head>
<body>

	<h1>Manara shop</h1>
	<p>specialiste des affiches et figurines Manara</p>

<?php
   
   $categorie=$_GET['cat'];

	$connect=mysqli_connect("localhost","root","","boutik");
		
	$requete="select reference,nom from produits where categorie='$categorie' ";
   mysqli_set_charset($connect,'utf8');
	$query=mysqli_query( $connect,$requete );
			
	while( $col=mysqli_fetch_array ( $query )){
				
		$nom=$col["nom"];
		$reference=$col['reference'];
										
		echo "<a href=\"description.php?reference=$reference\">$nom </a><br>"; 
	}
		
		
?>
 


















</body>
</html>
