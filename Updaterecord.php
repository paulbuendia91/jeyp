<?php

include "config.php";

if(!$con->connect_error){
	echo "Connected";
	
}

$ID = $_GET['id'];

$sql = "Select * from tbl_inventory where ID = '$ID'";
$result = $con->query($sql);

$row = $result->fetch_assoc();

    $id = $row['ID'];
    $prodname = $row['PRODNAME'];
	$image = $row['IMAGE'];
	$size = $row['SIZE'];
	$price  = $row['PRICE'];
	$quantity = $row['QUANTITY'];
	
$con->close(); 

?>
<html>
<head>
<title> Update INVENTORY </title>
<center>
<h1>UPDATE INVENTORY</h1>
</center>
<a href="Mainpage.php"><img src="Logo1.png" id=logo> </img> </a>
<link rel=stylesheet href=update.css>
</head>
<body class=bg>
<form method=POST action="Finalupdate.php">
<div class=tables>
<center>
<table border=1>
<tr>
<th colspan=4 class=h1> Update Inventory 
<tr>
<th> ID:
<td colspan=3>
<input type=text name=ID value="<?php echo $id; ?>">
<tr>
<th> Product Name:
<td colspan=3><select name=PRODNAME value="<?php echo $prodname; ?>">
<option value="Boy Black Shoes"> Boy Black Shoes </option>
<option value="Kid Black Shoes"> Kid Black Shoes </option>
<option value="Girl Black Shoes"> Girl Black Shoes </option>
</select>

<tr>
<th>Upload Image:
<td colsapn=3><input type=file name=IMAGE value="<?php echo $image; ?>"readonly>
<tr>
<th> Shoe Size:
<td colspan=3> <input type=text name=SIZE value="<?php echo $size; ?>">
<tr>
<th> Price:
<td colspan=3> <input type=text name=PRICE value="<?php echo $price; ?>">
<tr>
<th> Quantity:
<td colspan=3> <input type=text name=QUANTITY value="<?php echo $quantity; ?>">
<tr>
<th colspan=4>

<input type=submit name=sub class=btn value="Update Inventory">
</form>
</center>
</body>
</table>
</html>