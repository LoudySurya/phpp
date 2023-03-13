<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<?php  
$nama1 = $_POST['nama'];
$alamat1 = $_POST['alamat'];

		?>
	Halo, Nama saya <?php echo $nama1; ?>
	Tinggal di
	<?= $alamat1?>.
	</center>

</body>
</html>