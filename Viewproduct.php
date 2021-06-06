<html>
<head>
<title> View </title>
<link rel=stylesheet type="text/css" href=view.css>
</head>

<body class=bg>
<form method=POST action="Viewproduct.php">
<br>
<div id=logo>
<a href="Mainpage.php"><img src="Logo1.png" id=logo> </img> </a>
</div>
<div id=search>
<input type=text class=txtbox name=search>
<input type=submit name=sub class=btn value="Search">
</div>
<br>
<br><br><br>
<center> <h1> INVENTORY </h1> </center>
</form>
</body>
</html>

<?php
include "config.php";

if(!$con->connect_error){
}

if(isset($_POST['sub'])){
$search = $_POST['search'];

if($search !=NULL){	
$sql = "Select * from tbl_inventory where ID LIKE '%$search%' OR BRAND LIKE '%$search%'";
}}else{
$sql = "Select * from tbl_inventory";	
}

$result = $con->query($sql);

if($result-> num_rows > 0){

echo "<div id=tables>";
while($row = $result->fetch_assoc()){
echo "<center>";
echo "<table border=5>";
echo "<div id=pic>";
$source ="shoeimg/".$row['IMAGE'];
echo "<tr>";
echo "<center>";
echo "<td><img src=$source width=300px height=250px/>";
echo "</center>";
echo "<div class=txt>";
echo "<td colspan=5><p> Today, Marikina is known as <br>
 the Shoe Capital of the Philippines because of its <br>
 progressive shoe industry. It is also the home of <br>
 the world’s largest pair of shoes certified by the <br>
 Guinness Book of World Records. <br>
 It is a multi-awarded metropolitan city, often <br>
 cited for its vibrant economy, highly-skilled <br>
 and literate work force, involved and <br>
 enlightened business community and responsive <br>
 local government that puts a premium on <br> 
 governance, sustainable urban development <br>
 and public service.
 </p>";
echo "</div>";
echo "<tr>";
echo "</div>";
echo"<th> Shoe ID";
echo"<th> Product";	
echo"<th> Shoe Size";	
echo"<th> Shoe Price";
echo"<th> Quantity";	
echo"<th> Update";
echo "<tr>";
echo "<tr>";
echo "<td>".$row['ID'];
echo "<td>".$row['PRODNAME'];
echo "<td>".$row['SIZE'];
echo "<td>".$row['PRICE'];
echo "<td>".$row['QUANTITY'];
echo "<td><a href='Updaterecord.php? id=".$row['ID']."'> Edit </a>";
	echo "<tr>";
	echo "</table>";
	echo "</div>";
	echo "</center>";
}

}else{
	
	echo "Empty";
}
$con->close();


?>