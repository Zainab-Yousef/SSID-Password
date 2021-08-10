 <head>
	   <style>
  body {
  background-image: url('Compass.jpg');
  background-attachment:fixed;
  background-repeat: no-repeat;
  background-position: center;
		   }
	 </style>
</head>
<?php
if(!isset($_POST['myFrom']))
{
	header("location: dir.php");
	return;
}


$value = "";
foreach($_POST as $v)
{
	$value = $v;
}

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'direction';
$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_query($conn, "INSERT INTO `movement`(`direction`) VALUES ('$value')");
?> 

<body>
<div style="font-size: 30px;"  >
	<?php echo $v; ?>
</div>
	<p>TO <a href="logout.php">Logout</a></p>
</body>
