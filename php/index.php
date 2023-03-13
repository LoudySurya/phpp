<!DOCTYPE html>
<html>
<head>
	<title>Dasar-Dasar PHP</title>
</head>
<body>
	<?php
echo "Tanggal Hari Ini: ";
echo date(" d-D, F Y <br>");
echo "<br><br>";
$nama="Loudy";
echo "$nama, Welcome To PHP";
echo"<br>";
$hari = date("l");
if ($hari=="Tuesday") {
	echo "Hari Yang Menyenangkan";
}else{
	echo "Hari Yang Melelahkan";
}
echo "<br><br>";

for ($count=1; $count <=5 ; $count++) { 
	# code...
	echo "Perulangan Ke-$count<br>";
}

echo "<br><br>";

$teman= array("Aku","Kamu","Dia" );

echo "$teman[1] pilih $teman[0] atau $teman[2]?";
?>

</body>
</html>