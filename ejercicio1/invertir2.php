<html>
	<head>
		<title>hola mundo</title>
	</head>
	<body>
		<form action="invertir2.php" method="post">
			<input type="text" name="numero"><br>
			<input type="submit" value="invertir">

		</form>
		<?php 

		$numero=$_POST['numero'];
		$nstring=(string)$numero;
		$result="";

		for($i=strlen($numero);$i>=0;$i--)
{
    # añadimos cada uno de los valores a la variable $result
    $result.=$nstring[$i];
}
 
# Mostramos el numero invertido
echo "El valor invertido es: ".(int)$result." <br>";




		 ?>
	</body>
</html>