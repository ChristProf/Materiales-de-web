
<?php
$var1 = -3;
$var2 = 4;
$acum = 3;
$cont = 0;
$suma = $var1 + $var2;
$acum += $suma;
$cont++;

echo "<p>
Los valores son: <br>
var1 = $var1 <br>
var2 = $var2 <br>
acum = $acum <br>
cont = $cont <br>
suma = $suma <br>
</p>
<br>";

echo ($var1 > 0 ? "Mayor a cero\n" : "Menor o igual a cero\n");


?>
