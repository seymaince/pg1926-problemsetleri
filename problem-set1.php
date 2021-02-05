<html>
<head>
<title>Problem Set - 1</title>
</head>
<body>

<?php  
date_default_timezone_set('Etc/GMT-3');
$saat =  date("H:i");
echo "Saatimiz ".$saat."<br>";
if($saat>06 AND $saat<=10)
{
	echo " Günaydın";
}
elseif($saat>10 AND $saat<=17)
{
	echo " İyi Günler ";
}
elseif($saat>17 AND $saat<=20)
{
	echo " İyi Akşamlar";
}
elseif($saat>20 AND $saat<=00)
{
	echo " İyi Geceler";
}
elseif($saat>00 AND $saat<=06)
{
	echo " Esenlikler Dünya";
}
?>

</body>
</html>