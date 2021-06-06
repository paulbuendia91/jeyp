<html>
<head>
<title> ADD INVENTORY </title>
<center>
<h1>ADD INVENTORY</h1>	
</center>
<a href="Mainpage.php"><img src="Logo1.png" class=logo> </img></a>
<link rel=stylesheet href=add.css>
</head>
<body class=bg> 
<form method=POST action="Add.php">
<div class=tables>
<center>
<table  border=1>
<tr>
<th colspan=4>Add Inventory 
<tr>
<th> ID:
<td colspan=3>
<input type=text name=ID  placeholder="ID Number">
<tr>
<th> Brand Name:
<div class=brand>
<td colspan=3><select name=BRAND>
<option value="Boy Black Shoes"> Boy Black Shoes </option>
<option value="Kid Black Shoes"> Kid Black Shoes </option>
<option value="Kid Black Shoes"> Girl Black Shoes </option>
</select>
</div>
<tr>
<th>Upload Image:
<td colsapn=3><input type=file name=IMAGE >
<tr>
<th> Shoe Size:
<td colspan=3> <input type=number name=SIZE >
<tr>
<th> Price:
<td colspan=3> <input type=text name=PRICE >
<tr>
<th> Quantity:
<td colspan=3> <input type=text name=QUANTITY >
<tr>
<th colspan=4>

<input type=submit name=sub class=btn value="Add Inventory" >
<input type=reset class=btn value="Cancel">
</form>
</div>
</table>
</center>
</html>
<?php
include "config.php";
	
	if (!$con-> connect_error){
	}else{
	echo "Not Connected";
	
}
if (isset($_POST['sub']))
{
	
	$id = $_POST['ID'];
    $brand = $_POST['BRAND'];
	$size = $_POST['SIZE'];
	$image = $_POST['IMAGE'];
	$price  = $_POST['PRICE'];
	$quan = $_POST['QUANTITY'];

$sql = "Insert into tbl_inventory (ID,BRAND,SIZE,IMAGE,PRICE,QUANTITY) values ($id,'$brand',$size,'$image',$price,$quan)";

$insert= $con->query($sql);

if($insert == True){
	?>
	
<script>
	alert("Successfully Added")
</script>
	
	<?php
}else{
	echo $con->error;
}
}
?>