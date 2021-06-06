<html>
<head>
<title> Check Out </title>
<h1></h1>
<img src="Logo1.png" class=logo> </img>
<link rel=stylesheet href=checkout.css>
</head>
<body class=bg>
<div class=tables>

<form method=POST action="cart.php">
<?php

include "config.php";

if(!$con->connect_error){
}

session_start();
$_SESSION["cust"] =1;

$ID = $_GET['id'];


$sql = "Select * from tbl_inventory where ID = '$ID'";
$result = $con->query($sql);

if($result-> num_rows > 0){
	echo "<table border=1>";
	echo "<tr>";

$row = $result -> fetch_assoc();

    $id = $row['ID'];
    $prodname = $row['PRODNAME'];
	$size = $row['SIZE'];
	$price  = $row['PRICE'];
	$quan  = $row['QUANTITY'];
	$total = $row['TOTAL'];

$source ="shoeimg/".$row['IMAGE'];
echo "<td colspan=2><img src=$source width=90% height=250px/>";
echo "<tr>";
echo"<th> Shoe ID: ";
echo"<th>$id";
echo "<tr>";
echo"<th> Product Name: ";
echo"<th>$prodname";
echo "<tr>";	
echo"<th> Shoe Size: ";
echo"<th>$size";
echo "<tr>";	
echo"<th> Shoe Price: ";
echo"<th>$price";
echo "<tr>";
echo"<th> Quantity: ";
echo"<th>$quan";
echo "<tr>";
echo"<th> No. of Items:";
echo"<th><input type=number name=num>";
echo "<tr>";
echo"<th colspan=2><input type=submit name=sub value='Add to Cart'>";

    $_SESSION ["id"] =$id;
    $_SESSION ["prodname"] =$prodname;
	$_SESSION ["size"] =$size;
	$_SESSION ["price"] =$price;
	$_SESSION ["quan"] =$quan;
}

else{
echo "No Available Items";
}


?>
</div>