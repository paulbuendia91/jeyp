<html>
<head>
<title> LOGIN </title>
<link rel=stylesheet type="text/css" href=login2.css>
</head>
<body class=bglog>
<form method =POST action=login2.php>
<a href="Mainpage.php"><img src="Logo1.png" class=logo> </img></a>

<div class="start">
<h1> Member Login </h1>
<center>
<img src="admin.png" class=icon> </img></center>
Username:
<input type=text name=user class=txtbox placeholder="Enter Username">
<br>
Password:
<input type=password name=pass class=txtbox placeholder="Enter Password">
<br>
<input type=submit name=login value=Login class=btn>
<a href="Mainpage.php"><input type=submit name=back value=Back class=btn></a>
</div>
</form>
</body>
</html>

<?php
include "config.php";

if (!$con->connect_error) {
	echo " ";
}

if (isset($_POST['login'])){
	
$user= $_POST['user'];
$pass= $_POST['pass'];

$sql = "Select * from tbl_accounts where USERNAME = '$user' AND PASSWORD = '$pass' ";
$sql1 = "Insert into tbl_log (USER,ACTION,DATE) values ('$user','Logged In',NOW())";

$result = $con->query($sql);
$result1 = $con->query($sql1);

if($result -> num_rows > 0){
	
	$row = $result->fetch_assoc();
	$pos = $row['POSITION'];
	
	if($pos == 'Admin'){
		?>
		<script>
		alert("Welcome Admin!")
		</script>
		<?php
header("refresh:0;url=Admin.php");
	}elseif($pos == 'Customer') {
?>
	<script>
		alert("Welcome Customer!")
		</script>
<?php
header("refresh:0;url=Customerhome.php");
	}
}else{
	?>
	<script>
	alert ("Invalid Account!")
	</script>
	<?php
}
}
?>