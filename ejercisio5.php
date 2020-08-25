<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Salario de un profesor</h1>
<?php
$i=1;
$s=1500;
$q=7;
$n=$s*1.1;
for ($i<0; $i<$q ;$i++)
{
    echo "Año: $i obtenio un salario de: $n soles.<br>";
    $n=$n+1650;
}
?>
</body>
</html>