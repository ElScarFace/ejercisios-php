<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Calculo de su sueldo</h1>
<form action="ejercisio3.php" method="post">
<?php
if (isset($_POST['btuno']))
{
	$c=850*0.05;
}
if (isset($_POST['btdos']))
{
	$c=850*0.1; 
}
if (isset($_POST['bttres']))
{
	$c=850*0.2;
}
?>
<p>Ingrese su nombre: <input type="text" name="nombre" /></p>
<form action="ejercisio3.php" method="post">
<p>Indique su nivel de estudios:</p>
<input type="submit" name="btuno" value="Secundaria"/>
<input type="submit" name="btdos" value="Tecnico"/> 
<input type="submit" name="bttres" value="Profesional"/>
</form>
<h1>----------------------------------------</h1>
Hola <?php echo($_POST['nombre']) ?>
<?php echo" su sueldo es ".$c ?> soles.
</body>
</html>