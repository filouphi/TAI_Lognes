<?php


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ddn=$_POST['ddn'];



			$connect=mysqli_connect("localhost","root","","porto");

			$requete2="INSERT INTO equipe VALUES(NULL,'$nom','$prenom','$ddn')";

			$query=mysqli_query( $connect,$requete2);

//echo "$requete2";
			
header("location:porto.php")
?>