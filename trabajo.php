<?php 

$var=0.10;
$var1=0.15;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="POST" enctype="multipart/form-data">
 	<h2>ingrese el nombre del producto</h2>
 	<input type="text" name="pro">	
 <h2>ingrese la cantidad del producto</h2>
  <input type="text" name="valor" value="">
  <input type="submit" name="enviar">
 	</form>
 </body>
 </html>

<?php

if ($_POST["valor"]<100) {
	echo $_POST["pro"];
	echo "  monto final :";
	echo $_POST["valor"];
}
else if ($_POST["valor"]>=100 && $_POST["valor"]<500 ) {
	echo $_POST["pro"];
	echo "  monto total :";
	$_POST["valor"]*$var;
	
	echo $_POST["valor"]-$_POST["valor"]*$var;
}
else if ($_POST["valor"]>500 ) {
	echo $_POST["pro"];
	$_POST["valor"]*$var1;
	echo $_POST["valor"]-$_POST["valor"]*$var1;
}

 ?>