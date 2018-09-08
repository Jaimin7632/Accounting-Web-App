<?php
include "connection.php";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
 $product = $request->product;
 $pname = $request->pname;
 $date1 = $request->date1;
 $date2 = $request->date2;
$add="";
if($pname !=""){$add.=" AND partyname='$pname'";}
if($date1 !="" && $date2 !=""){$add.=" AND date BETWEEN '$date1' AND '$date2'";}
$sql=$conn->query("SELECT * FROM sell_detail where productname='$product'".$add." ORDER BY date desc");
$result=array();
$sell_quantity=0;
while($r= mysqli_fetch_assoc($sql))
{
	$result['sell'][]=$r;
	$sell_quantity += $r['quantity'];
}
$sql=$conn->query("SELECT * FROM purchase_detail where productname='$product'".$add." ORDER BY date desc");

$purchase_quantity=0;
while($r= mysqli_fetch_assoc($sql))
{
	$result['purchase'][]=$r;
	$purchase_quantity+=$r['quantity'];
}
$result['qua']["sell"] =$sell_quantity;
$result['qua']["purchase"]=$purchase_quantity;
echo json_encode($result);


?>