<?php
include "config.php"; 

if(!$con->connect_error){
	echo "Connected";
}

if (isset($_POST['sub'])){
	
	$Id = $_POST['ID'];
	$Prodname = $_POST['PRODNAME'];
	$Size = $_POST['SIZE'];
	$Image = $_POST['IMAGE'];
	$Price = $_POST['PRICE'];
	$quantity = $_POST['QUANTITY'];

	
$sql = "UPDATE tbl_inventory SET PRODNAME = '$Prodname', SIZE = '$Size', IMAGE = '$Image', PRICE = '$Price', QUANTITY = '$quantity' WHERE ID = '$Id'";

$result = $con->query($sql);

if($result == True){
	?>
	<script>
	alert("Successfully Update!")
	</script>
	<?php
	header("refresh:0;url=Viewproduct.php");
}else{
	echo $con->error;
}
$con->close();
}
?>