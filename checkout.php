<?php

include "config.php";

if(!$con->connect_error){
	echo "Connected";
}
session_start();
if(isset($_POST['sub'])){
$pid=$_SESSION["id"];
$cus=$_SESSION["cust"];
$newquan=$_SESSION['newquan'];
$sql="UPDATE tbl_inventory SET QUANTITY='$newquan' WHERE ID='$pid'";
$sql1="UPDATE tbl_orders SET STATUS='CHECKOUT' WHERE CUSTOMERID='$cus'";
$result=$con->query($sql);
$result1=$con->query($sql1);


if($result==true && $result1==true ){
?>	 
	<script>	
	alert("Order Successfully added")	
	</script>
<?php	
header("refresh:0;url=Viewcustomer.php");
}else{
echo $con->error;	

}
}



?>