<h1>Numero mayor</h1>
<?php
$numeros=array();
$contador=0;
$numeros[0]=5;
$numeros[1]=13;
$numeros[2]=87;
$numeros[3]=55;
$numeros[4]=9;
$mayor=0;
$posmayor=0;
for($contador=0; $contador<=4; $contador++)
{
	if ($numeros[$contador]>=$mayor)
	{
		$mayor=$numeros[$contador];
		$posmayor=$contador;
	}
}
for ($contador=0; $contador<=4; $contador++)
{
	if ($contador==$posmayor)
	{
		print $numeros[$contador]."<---este es el mayor<br>";
	}
	else
	{
		print $numeros[$contador]."<br>";
	}
}
?>