<?php
include "connection.php";
$partyname=$_POST['name'];
$product=$_POST['product'];
$quantity=$_POST['quantity'];
$rate=$_POST['rate'];
$amount=$_POST['amount'];
$tamount=$_POST['tamount'];
$sgst=$_POST['sgst'];
$cgst=$_POST['cgst'];
$igst=$_POST['igst'];
$date1  = $_POST['date'];

$conn->query("CREATE TABLE IF NOT EXISTS purchase_detail(no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,date date,partyname varchar(200),productname varchar(100),quantity varchar(50),rate varchar(50),amount varchar(50),sgst varchar(50),cgst varchar(50),igst varchar(50),totalamount varchar(50) )");


$w= $conn->query("INSERT INTO purchase_detail (date,partyname,productname,quantity,rate,amount,sgst,cgst,igst,totalamount) VALUES ('$date1','$partyname','$product','$quantity','$rate','$amount','$sgst','$cgst','$igst','$tamount')");
if($w){
	echo "Purchase detail successfully added";
}else{
	echo "error";
}
$ptable = partytable($partyname);
$tt= $conn->query("INSERT INTO $ptable (date1,credit,debit) VALUES ('$date1','$tamount','')");

?>