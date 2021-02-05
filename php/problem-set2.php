<html>
<head>
<title>Problem Set-2</title>
<script type="text/javascript" src="javascript.js"></script>

</head>
<body>
<table>
<form action="problem-set2.php" method="post">
  <tr>
    <td bgcolor="yellow">Bir Sayı Giriniz:</td>
    <td><input name="sayi" type="text" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="gonder" type="submit" value="Mükemmel Sayı mı?"></td>
  </tr>
</table>

</form>

<?php
$mesaj1 = "<script> alert('Mükemmel Sayı') </script>";
$mesaj2 = "<script> alert('Mükemmel Sayı Değil') </script>";
$sayi=$_POST['sayi'];
for($i=1;$i<=$sayi/2;$i++)
   if ($sayi%$i==0)
      $bolenler[]=$i;
   echo "<u>$sayi sayısının tam bölenleri:</u><br>";
for ($i=0;@$bolenler[$i];$i++)
	echo $bolenler[$i],"<br>"; 
	echo "<br>Bölenlerin Toplamı: ".$toplam=array_sum($bolenler)." = ".$sayi."<br>";
	$toplam=array_sum($bolenler);
	if($sayi==$toplam)
	{
		echo $mesaj1;
	}
	else
	{
		echo $mesaj2;
	}

?>
</body>
</html>