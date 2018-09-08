<?php
include "connection.php";
$postdata = file_get_contents("php://input");
$r = json_decode($postdata);
$method = $r->method;
$party =$r->party;
$product=$r->product;
$date=$r->date;
$amount=$r->amount;
$rate=$r->rate;
$quantity=$r->quantity;
$tamount=$r->totalamount;
$ptable =partytable($party);
$responce=array();
$responce['result']['error']=0;
if($method == "sell"){
	$t= $conn->query("DELETE FROM sell_detail WHERE partyname='$party' AND productname='$product' AND date='$date' AND amount='$amount' AND totalamount='$tamount' AND quantity='$quantity' AND rate='$rate' LIMIT 1");
	$tt=$conn->query("DELETE FROM $ptable WHERE date1='$date' AND debit='$tamount' LIMIT 1");
			if($t && $tt){$responce['result']['message']="Successfully Deleted";}
			else{
			$responce['result']['error']=1;
			}
}else if($method == "purchase"){
		$y= $conn->query("DELETE FROM purchase_detail WHERE partyname='$party' AND productname='$product' AND date='$date' AND amount='$amount' AND totalamount='$tamount' AND quantity='$quantity' AND rate='$rate' LIMIT 1");
	$yy=$conn->query("DELETE FROM $ptable WHERE date1='$date' AND credit='$tamount' LIMIT 1");
			if($y && $yy){$responce['result']['message']="Successfully Deleted";}
			else{
			$responce['result']['error']=1;
			}

}else{
	$responce['result']['error']=1;
	$responce['result']['message']="";
}

echo json_encode($responce);

?>