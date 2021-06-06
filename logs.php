<html>
<head>
<title> LOGS </title>
<h1>LOGS</h1>
<a href="Mainpage.php"><img src="Logo1.png" id=logo> </img> </a>
<link rel=stylesheet type="text/css" href=logs.css>
</head>
<body class=bg>
<form method=POST action="logs.php">
</form>
</body>
</html>
<?php
include "config.php";

$sql = "Select * from tbl_log";

$result = $con->query($sql);

if($result-> num_rows > 0){

echo "<table border=1 class=tables>";
echo "<tr>";
echo"<th> ID";
echo"<th> User";	
echo"<th> Action";	
echo"<th> Date";

while($row = $result -> fetch_assoc()) {
	echo "<tr>";
	echo "<td>".$row['ID'];
	echo "<td>".$row['USER'];
	echo "<td>".$row['ACTION'];
	echo "<td>".$row['DATE'];
	
}

}else{
	
	echo "Empty";
}
$con->close();


?>