<!DOCTYPE html>
<html>
<head>
	<title>boutik.com</title>
</head>
<body>

	<h1>Manara shop</h1>
	<p>specialiste des affiches et figurines Manara</p>

<?php
   
   $reference=$_GET['reference'];

	$connect=mysqli_connect("localhost","root","","boutik");
		
	$requete="select reference,nom,descriptif,photo,prix from produits where reference='$reference' ";
    mysqli_set_charset($connect,'utf8');
	$query=mysqli_query( $connect,$requete );
			
	while( $col=mysqli_fetch_array ( $query )){
				
		$nom=$col["nom"];
		$reference=$col['reference'];
		$descriptif=$col['descriptif'];	
		$photo=$col['photo'];
		$prix=$col['prix'];		
		echo "$nom <br> $descriptif<br> <img src=\"img/$photo\"/> <br>$prix&euro;<br>"; 
	}
		
		
?>
 


















</body>
</html>
