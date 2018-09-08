<?php
include "connection.php";
$product= $_POST['product'];

$dquality= $_POST['dquality'];
$drate= $_POST['drate'];
$hsnno= $_POST['hsnno'];
$conn->query("CREATE TABLE IF NOT EXISTS product_detail(no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name varchar(100),hsn varchar(100),dquality varchar(50),drate varchar(50))");

$res = $conn->query("INSERT INTO product_detail (name,hsn,dquality,drate) VALUES('$product','$hsnno','$dquality','$drate')");
if($res){echo "Successfilly Added";}
else{ 
$sq= $conn->query("SELECT name from product_detail where name='$product'");
if(mysqli_num_rows($sq) != 0){
	$dq= $conn->query("UPDATE product_detail set  hsn='$hsnno', dquality='$dquality', drate='$drate' where name='$product'");
	if($dq){echo $product." detail updated";}
	else{
		echo "Error";
	}
}else{
	echo "System error Contact Developer";
}
}
?>
