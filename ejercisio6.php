<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Arreglo</h1>
	<?php
if(isset($_POST['vec']))
{
	$vector=$_POST['vec'] ;$n= count($vector);
	for ($i=0;$i<$n; $i++)
	{
		print "arreglo_a[".$i."]=". $vector[$i] ."<br>";
	}
}
?>
<br>
<form action="ejercisio6.php" method="post">
<?php
  $n=7;
  for ($i=0;$i<=$n; $i++)
  {
  	echo $i ; echo "<input type='text' name='vec[]' size='10'>";
	echo"<br>";
  }
?>
<input type="submit">
</form>

</body>
</html>