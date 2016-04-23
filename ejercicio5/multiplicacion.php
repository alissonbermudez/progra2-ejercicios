<?php
$multiplicador=115;
$multiplicando=25;

while ($multiplicador>=1)
{


if ($multiplicador%2!=0)

   $producto =$producto+$multiplicando;
$multiplicador=$multiplicador/2;
$multiplicando=$multiplicando*2;

echo "El producto de esta operacion es: $producto ";

}

?>
