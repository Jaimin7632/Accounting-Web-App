<?php
include "connection.php";

$sql=$conn->query("SELECT * FROM sell_detail ORDER BY date desc");
$result=array();

while($r= mysqli_fetch_assoc($sql))
{
	$result['sell'][]=$r;
	
}
$sql=$conn->query("SELECT * FROM purchase_detail ORDER BY date desc");


while($r= mysqli_fetch_assoc($sql))
{
	$result['purchase'][]=$r;

}
$sql=$conn->query("SELECT * FROM party_detail");

while($r= mysqli_fetch_assoc($sql))
{
	$result['party'][]=$r;

}
$sql=$conn->query("SELECT * FROM product_detail");


while($r= mysqli_fetch_assoc($sql))
{
	$result['product'][]=$r;

}
echo json_encode($result);


?>