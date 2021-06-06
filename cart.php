<?php

include "config.php";

if(!$con->connect_error){
	echo "Connected";
}
session_start();
if(isset($_POST['sub'])){
	
	
$cus=$_SESSION["cust"];
$id=$_SESSION["id"];
$prodname=$_SESSION["prodname"];
$pcat=$_SESSION["pcat"];
$price=$_SESSION["price"];
$prevquan=$_SESSION["quan"];
$numofitems = $_POST['num'];
$total = $price * $numofitems;
$newquan=$prevquan-$numofitems;

$sql="INSERT INTO tbl_orders(PRODUCTID,PRODNAME,PRICE,NUMOFITEMS,TOTAL,DATE,CUSTOMERID,STATUS)
		 VALUES ($id,'$prodname',$price,$numofitems,$total,NOW(),'$cus','CART')";
$result=$con->query($sql);


if($result==true){
?>	 
	<script>	
	alert("Order Successfully added")	
	</script>
<?php	
header("refresh:0;url=cart2.php");
}else{
echo $con->error;	

}
$_SESSION['newquan'] = $newquan;
}



?>