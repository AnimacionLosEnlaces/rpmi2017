<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Bootstrap</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- jQuery library -->
<script src="js/jquery-3.2.1.js"></script>

<!-- Tooltip Tether library -->
<script src="js/tether.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.js"></script>

<style>

.c1 {
	background-color: #5879E3;
	height: 50px;
}
.c2 {
	background-color: red;
	height: 50px;
}
.c3 {
	background-color: green;
	height: 50px;
}
.c4 {
	background-color: blue;
	height: 50px;
}
.c5 {
	background-color: black;
	height: 50px;
}
.c6 {
	background-color: yellow;
	height: 50px;
}


</style>




</head>

<body>

<div class="container-fluid">

	<div class="row">
    	
        <div class="col-lg-12 c1">Hola mundo</div>
    </div>	
    
    <div class="row">
    	<?php for($n=0;$n<1200;$n++) : ?>
    	<div class="col-xl-1 col-lg-2 col-md-3 col-sm-6 col-12"> 
        	
            
            <img src="img/Koala.jpg" alt="Koala" class="img-fluid rounded-circle">
            <span class="glyphicon glyphicon-envelope"></span>
            
            
        </div>
		<?php endfor ?>
    
    </div>

</div>
</body>
</html>
