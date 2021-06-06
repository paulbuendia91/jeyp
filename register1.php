<html>
<body>
<head>
<title> REGISTER </title>
<link rel=stylesheet type="text/css" href=register.css>
</head>
<body class=bgreg>
<a href="Mainpage.php"><img src="Logo1.png" class=logo> </img></a>
<div class="start">
<form method =POST action=register1.php>


<h1> Register </h1>
<br>
 ID: 
<br>
<input type=number name=id class=txtbox placeholder="Enter ID Number">
<br>
NAME: 
<br>
<input type=text name=name class=txtbox placeholder="Enter Name">
<br>
 USERNAME: 
<input type=text name=user class=txtbox placeholder="Enter Username">
<br>
 PASSWORD: 
<input type=password name=pass class=txtbox placeholder="Enter Username">
<br>
 POSITION:
<input type=text name=pos class=txtbox placeholder="Enter Position">
<br>
<input type=submit value=Register name=register class=btn>
<a href=Mainpage.php><input type=submit name=cancel value=Cancel class=btn></a>
</div>
</form>
</body>
</html>

<?php
include "config.php";

$con=new mysqli($servername,$username,$password,$dbase);

if(!$con->connect_error){
	echo "";
}

if (isset($_POST['register'])){

	$id= $_POST['id'];
	$name = $_POST['name'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$pos = $_POST['pos'];
	
$sql = "Insert into tbl_accounts (ID,NAME,USERNAME,PASSWORD,POSITION) values ($id,'$name','$user','$pass','$pos')";                                             

$insert = $con->query($sql);

if($insert == TRUE){
}
?>
<script>
    alert("Successfully Added")
</script>
<?php
}else{
	echo $con->error;
}
$con->close();


?>