<html>
<head>
<title></title>
</head>
<body>
<h1>Pago por N* Articulos</h1>
<form method="post">
<table style="text-align: left; margin-left: auto; margin-right: auto ;" border="1" cellpadding="1" cellspacing="1"><tbody>
<tr>
<td>
<label for="precio">Ingrese su consumo:</label>
</td>
<td>
<input name="precio" required="required" type="number" />
</td>
</tr>
<tr align="center">
<td colspan="2" rowspan="1">
<input value="Consultar" type="submit" />
</td>
</tr>
</tbody>
</table>
</form>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $precio = floatval ($_POST['precio']);
    $descuento=$precio*0.1;
    if($precio>=200)
        $descuento=$precio*0.15;
    if($precio>100&&$precio<200)
        $descuento=$precio*0.12;
    $costo=$precio-$descuento;
    //$pago_por_todo=$pago_por_todo+$costo;
    echo 'Nuevo total a pagar: ' . $costo . "    soles<br/>\n";
    echo 'Se aplico un descuento de: ' . $descuento . " soles<br/>\n";
} 
?>
</body>
</html>