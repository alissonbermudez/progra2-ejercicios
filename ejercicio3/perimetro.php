<!DOCTYPE html>
	<html>
	<head>
		<title>circulo</title>
	</head>
	<body>
	
	<form method="post" action="perimetro.php">
		

		entrada de el radio<input name="entrada" type="text"><br>
		<input type="submit" value="calcular">


	</form>
	<?php 

		$entrada=$_POST['entrada'];
		$perimetro=2*pi();
		$perimetro2=$perimetro*$entrada;
		echo "perimetro : ".$perimetro2."<br>";

		$area=pi()*pow($entrada,2);
		echo "area :".$area;


		 ?>

	</body>
	</html>	