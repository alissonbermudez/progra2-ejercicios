<?php 



function cuadrado($num){

$fin = $num -1;
echo " <table>";
for ($i=0; $i < $num ; $i++) { 
	echo "<tr>";

	if ($i == 0) {
		for ($a=0; $a < $num ; $a++) { 
		echo "<td>*</td>";
		}
	}elseif ($i == $fin) {
		for ($b=0; $b < $num ; $b++) { 
		echo "<td>*</td>";
		}
	}else{
		for ($c=0; $c < $num ; $c++) { 
			if ($c == 0) {
				echo "<td>*</td>";
			}elseif ($c == $fin) {
				echo "<td>*</td>";
			}else{
				echo "<td></td>";
			}
		}
	}
	

	




	echo "</tr>";
	}




echo " </table>";

}





if (isset($_REQUEST['num'])) {	
	$numero = $_REQUEST['num'];

	cuadrado($numero);








}else{



 ?>

<form action="cuadrado.php" >
	
	<label for="">Tamaño del cuadrado: </label>
	<input type="number" name="num">
	<input type="submit" value="Generar">
</form>

<?php 




}


 ?>


 	
 	
 
