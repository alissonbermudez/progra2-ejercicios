<?php 



function biciesto($año){

if ($año < 1582) {

	if ($año % 4 == 0) {
		echo $año." Es biciesto";
	}else{
		echo $año." no es biciesto";
	}
}else{

	if (($año%4==0  and $año%100!=0) or $año%400==0) {
		echo $año." Es biciesto";

	}else{
		echo $año." No es biciesto";
	}
}






}

if (isset($_REQUEST['naño'])) {	
	$naño = $_REQUEST['naño'];
	biciesto($naño);
}else{
 ?>
<form action="biciesto.php" >
	
	<label for="">Ingrese el Año: </label>
	<input type="text" name="naño">
	<input type="submit" value="calcular">
</form>
<?php 
}
 ?>


 	
 	
 