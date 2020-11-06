<html>
<body>
<head>
				<title>cantine</title>

<style>
				div { 
				color:white; text-align: center;
				padding50px;
				font-size:20px;
				text-transform: uppercase; 
					}
h4 { 

</style>

<center>

<h1><p style="color:white;  
text-transform: uppercase;
font-size:80px;
">Menu du Jour</h1>
</center>
</head>


<body style="background-image: url(bois.jpg); background-attachment: fixed;background-repeat: no-repeat; background-size: cover;background-position: center;">


<center>

<?php

$connect=mysqli_connect("localhost","root","","crous");
mysqli_set_charset($connect,'utf8');

$requete="SELECT date,type, plats FROM menu Where date='2017-02-17' ORDER BY FIELD (type, 'entree', 'plat','dessert')";


$query=mysqli_query($connect,$requete);


echo "<div>";
while($col=mysqli_fetch_array($query)){
	
	$date=$col['date'];
	$type=$col['type'];
	$plats=nl2br($col['plats']);
	if($type=='entree'){
		$type='entrée';
	}
	
	
	echo "<h4>$type</h4>
		  <p>$plats</p>";
	}

echo "</div>";

?>

</center>

</body>
</html>