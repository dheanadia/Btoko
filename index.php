<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
    <title>Toko Sembako</title>
 <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
     <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand">Toko Sembako</a>
    
</head>

<body>
	< <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Selamat Berbelanja</h2>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM karyawan");
	?>
				
		Welcome <?php echo $_SESSION['nama'] ?> ! <a href='logout.php'>Logout</a><br/>
		<br/>
		<a href='view.php'>View and Add Products</a>
		<br/><br/>
	<?php	
	} else {
		echo "You must be logged in to view this page.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	?>
	<div id="footer">
		Created by <a href="https://dewacoding.wordpress.com/about/" title="OntaArab">OntaArab</a>
	</div>
</body>
</html>
