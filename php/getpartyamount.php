<?php
include "connection.php";
$pname=$_POST['pname'];
$ptable=partytable($pname);
$rr= $conn->query("SELECT * from $ptable");
$debit=0;
$credit=0;
while($r=mysqli_fetch_assoc($rr)){
	if($r['debit'] != "" ){
		$debit +=(int) $r['debit'];
	}
	if($r['credit'] != "" ){
		$credit += (int)$r['credit'];
	}
}
echo $credit-$debit;
?>