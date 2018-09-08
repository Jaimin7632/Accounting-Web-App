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
$truckno=$_POST['tkno'];
$agent=$_POST['agent'];
$lrno=$_POST['lrno'];
$drivername=$_POST['drivername'];
$licenceno=$_POST['licenceno'];
$erno=$_POST['erno'];

$date1  = $_POST['date'];


$conn->query("CREATE TABLE IF NOT EXISTS sell_detail(no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,date date,partyname varchar(200),productname varchar(100),erno varchar(100),truckno varchar(70),agent varchar(100),quantity varchar(50),rate varchar(50),amount varchar(50),sgst varchar(50),cgst varchar(50),igst varchar(50),totalamount varchar(50),lrno varchar(70),drivername varchar(100),licenceno varchar(70) )");



$w= $conn->query("INSERT INTO sell_detail (date,partyname,productname,erno,truckno,agent,quantity,rate,amount,sgst,cgst,igst,totalamount,lrno,drivername,licenceno) VALUES ('$date1','$partyname','$product','$erno','$truckno','$agent','$quantity','$rate','$amount','$sgst','$cgst','$igst','$tamount','$lrno','$drivername','$licenceno')");
if($w){
	echo "Successfull";
}else{
	echo "error";
	die();
}
$ptable = partytable($partyname);
$tt= $conn->query("INSERT INTO $ptable (date1,credit,debit) VALUES ('$date1','','$tamount')");
?>