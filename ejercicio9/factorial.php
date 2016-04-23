

    <?php 



function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
 }

if (isset($_REQUEST['num'])) {	
	$numero = $_REQUEST['num'];
	$resultado = factorial($numero);
	echo $resultado;
}else{
 ?>
<form action="factorial.php" >
	
	<label for="">Calcular factorial de: </label>
	<input type="number" name="num">
	<input type="submit" value="calcular">
</form>
<?php 
}
 ?>


 	
 	
 

