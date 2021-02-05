<html>
<head>
<title>Problem Set-3</title>
</head>
<body>
<table>
<form action="problem-set3.php" method="post">
  <tr>
    <td>Bir Sayı Giriniz:</td>
    <td><input name="sayi" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="gonder" type="submit" value="Asal Sayı mı?" /></td>
  </tr>
</table>

</form>

<?php
$sayi=$_POST['sayi'];
$asal=0; $i=2;
if($sayi==2)
{
	echo "Sayı Asaldır";
}
else{
	do
	{
	if ($sayi % $i == 0)
	{
		$asal = 1;
	}
	$i++;
	}
	while($i<$sayi);
	if ($asal != 1)
	{
		echo "Sayı Asaldır";
	}
	else
	{
		echo "Sayı Asal Değildir";
	}
}
?>
</body>
</html>