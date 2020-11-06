<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MANARA SHOP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body >

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MANARA SHOP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <?php
   
	$connect=mysqli_connect("localhost","root","","boutik");
		
	$requete="select distinct categorie from produits ";

	$query=mysqli_query( $connect,$requete );
			
	while( $col=mysqli_fetch_array ( $query )){
				
		$categorie=$col["categorie"];
										
		echo "<li><a href=\"cat.php?cat=$categorie\">$categorie</a></li>"; 
	}
		
		
?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
		
	
            <h1>MANARA</h1>
            <p>Milo Manara est né le 12 septembre 1945 en Italie célèbre dessinateur et scénariste de bande dessinée érotique</p>
            <p><a href="https://fr.wikipedia.org/wiki/Milo_Manara" class="btn btn-primary btn-large">Plus d'infos <i class="fa fa-wikipedia-w"></i> </a>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Categories</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

		                   <?php
   
	$connect=mysqli_connect("localhost","root","","boutik");
		
	$requete="select distinct categorie from produits ";

	$query=mysqli_query( $connect,$requete );
			
	while( $col=mysqli_fetch_array ( $query )){
				
		$categorie=ucwords($col["categorie"]);
										
		echo "
		
		     <div class=\"col-md-3 col-sm-6 hero-feature\">
                <div class=\"thumbnail\">
                    <img src=\"http://placehold.it/800x500\" alt=\"\">
                    <div class=\"caption\">
                        <h3>$categorie</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href=\"cat.php?cat=$categorie\" class=\"btn btn-primary\">Buy Now!</a> <a href=\"#\" class=\"btn btn-default\">More Info</a>
                        </p>
                    </div>
                </div>
            </div>";
		
		
		
		 
	}
		
		
?>
		



        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
