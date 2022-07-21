
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STRUK</title>
</head>
<body>
	<?php

	$nama   = $_POST['inama'];
	$jenis  = $_POST['ijenis'];
	$alamat = $_POST['ialamat'];
	$jarak  = $_POST['jarak'];
	$total  = $_POST['ototal'];
   
   $fp = fopen("laporan.txt", "a+");
   fputs($fp, "$nama | $jenis | $alamat | $jarak | $total \n");
   fclose($fp);

?>

<table border="0" align="center" width="60%" bgcolor="brokenwhite" cellpadding="14">
	<tr>
		<td width="100%" colspan="2"><h2 align="center">RINCIAN TRANSAKSI</h2></td>
	</tr>
	<tr>
		<td>Nama Pengirim </td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Jenis Barang </td>
		<td><?php echo $jenis; ?></td>
	</tr>
	<tr>
		<td>Alamat Tujuan </td>
		<td><?php echo $alamat; ?></td>
	</tr>
	<tr>
		<td>Jarak </td>
		<td><?php echo $jarak; ?></td>
	</tr>
	<tr>
		<td>Biaya Pengiriman </td>
		<td><?php echo $total; ?></td>
	</tr>

</table>

</body>
</html>