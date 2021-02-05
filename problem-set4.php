<html>
<head>
<title>Problem Set-4</title>
</head>
<body>
<table>
<form action="problem-set4.php" method="post">
  <tr>
    <td bgcolor="gray">Alışveriş Tutarı Giriniz:</td>
    <td><input name="tutar" type="text" /></td>
  </tr>
  <tr>
    <td bgcolor="red">Ödenen Para Giriniz:</td>
    <td><input name="miktar" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="gonder" type="submit" value="Para Üstü Ver" /></td>
  </tr>
</table>

</form>

<?php
$tutar=$_POST['tutar'];
$odenen=$_POST['miktar'];
echo "Alışveriş Tutarı: ".$tutar."<br>";
echo "Ödenen Tutar: ".$odenen."<br>";
$paraustu=$odenen-$tutar;
echo "Para Üstü:".$paraustu."<br>";

if($paraustu >=0 ){
	$birlira=floor($paraustu/1.00);
	echo "1 Lira = ".$birlira."<br>";
	$paraustu=$paraustu-$birlira;
	$ellikurus=floor($paraustu/0.50);
	echo "50 Kuruş = ".$ellikurus."<br>";
	$paraustu=$paraustu-$ellikurus;
	$yirmibes=floor($paraustu/0.25);
	echo "25 Kuruş = ".$yirmibes."<br>";
	$paraustu=$paraustu-$yirmibes;
	$beskurus=floor($paraustu/0.05);
	echo "5 Kuruş = ".$paraustu."<br>";
	$paraustu=$paraustu-$beskurus;
	$paraustu=floor($paraustu/0.01);
	echo "1 Kuruş = ".$paraustu."<br>";

}
elseif ($paraustu<0){
	echo "Para Üstü Yok";
}
?>

</body>
</html>