<html>
<head>
<title>CART</title>
<h1> </h1>
<img src="Logo1.png" class=logo> </img>
<link rel=stylesheet href=cart2.css>
</head>
<body class=bg>
<form method=POST action=checkout.php>
<center>
<div class=tables>
<?php
include "config.php";

if(!$con->connect_error){
}
session_start();

$cus=$_SESSION["cust"];

$sql = "Select * from tbl_orders where CUSTOMERID ='$cus' and STATUS='CART'";
$result = $con->query($sql);


if($result -> num_rows > 0){

echo "<table border=1>";
echo "<tr>";

echo "<th> Product ID:";
echo "<th> Product Name:";
echo "<th> Price:";
echo "<th> Quantity:";
echo "<th> Total:";

$total=0;
while($row = $result -> fetch_assoc()){
 
echo "<tr>";
echo "<td>".$row['PRODUCTID'];
echo "<td>".$row['PRODNAME'];
echo "<td>".$row['PRICE']; 
echo "<td>".$row['NUMOFITEMS']; 
echo "<td>".$row['TOTAL']; 
$total+=$row['TOTAL'];
}

echo "<tr>";
echo "<td colspan=5> Total Amount:".$total;
echo "<tr>";
echo "<th colspan=5><input type=submit class=btn name=sub value='Checkout'>";	
 ;
}else{
echo "Empty";
	
}


?>
</div>
</center>