<h2>tablas de matrices</h2>
<?php
    $filas = 20;
    $columnas = 20;
    $asteriscos = 10;
    $matriz = crearTabla($filas,$columnas,$asteriscos);
    dibujarTabla($matriz);
 
/* funciones */
 
function dibujarTabla($matriz,$numAsteriscos)
{
    $filas = sizeof($matriz);
    $columnas = sizeof($matriz[0]);
  
    echo "<h3>Tabla Buscaminas 20 filas * 20 columnas con 10 asteriscos</h3>";
 
    echo "<table border='1' cellpadding='10'>";
 
    for($i=1; $i < $filas-1; $i++)
    {
        echo "<tr>";
        for($j=1; $j < $columnas-1; $j++)
        {
                    echo "<td>".$matriz[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
 
function crearTabla($filas,$columnas,$numAsteriscos)
{
    $matriz = array();
 
    // crear matriz  en blanco 2 filas mas alta y 2 columnas mas ancha
    for($i=0; $i < $filas+2; $i++)
    {
        for($j=0; $j < $columnas+2; $j++)
        {
            $matriz[$i][$j] = ".";
        }
    }
    //Se agregan los 10 asteriscos
    for($n=0; $n < $numAsteriscos; $n++)
    {
            $matriz[rand(1,$filas)][rand(1,$columnas)] = "*";
    }
   
   
    
    return $matriz;
}
?>
 