
<!DOCTYPE html>
<html>
<head>
<title></title> 
</head>
<body>
<h2>Descuento de consumo</h2>
<form action="#" method="post">
<p>Precio inicial: <input type="text" name="precio" /></p>
<p>Aplicar descuento del: 
  <input type="submit" name="des" value="15" />. .
  <input type="submit" name="des" value="10" />. .
  <input type="submit" name="des" value="20" />. .
  <input type="submit" name="des" value="30" />
</p>
</form>
<?php  
function rebajas($base,$dto=0) {
         $ahorro = ($base*$dto)/100;
         $final = $base-$ahorro;
         return array($ahorro, $final);
         }
$precio=$_POST['precio'];
$descuento=$_POST['des'];			 
list($rebaja,$precioFinal)=rebajas($precio,$descuento);
echo "Precio inicial: $precio. <br/>";
echo "Por su consumo se le ha  rebajado en un $descuento%. <br/>";
echo "Tiene un descuento de: $rebaja soles. <br/>";
echo "Precio final a pagar: $precioFinal soles.";
?>
</body>
</html>