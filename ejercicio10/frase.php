<?php 
function vocales($frase){ 
	$frase1 = $frase;

$frase = strtoupper($frase);

$number = strlen($frase);

$vocales = 0;

for ($i=0; $i <= $number ; $i++) { 
	

	if ($frase[$i] == 'A' || $frase[$i] == 'E' || $frase[$i] == 'I' || $frase[$i] == 'O' || $frase[$i] == 'U') {
		$vocales ++;
	}
}

echo $frase1."<br>";
echo "<h3> Tiene ".$vocales." vocales</h3>";

 }


if (isset($_REQUEST['string'])) {	
	$string = $_REQUEST['string'];
	vocales($string);

}else{
 ?>
<form action="frase.php" >
	
	<label for="">Calcular vocales de: </label><br>

	<textarea name="string" id="" cols="30" rows="10"></textarea>
	<input type="submit" value="calcular">
</form>
<?php 
}
 ?>