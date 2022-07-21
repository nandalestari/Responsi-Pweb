<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Halo <?php echo $_SESSION['name'] ; ?>, Mau Kirim Kemana nih Paket nya ?</h1>

     <a href="proses.html"> CUSS KIRIM !!! </a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>