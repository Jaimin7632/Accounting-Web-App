<?php
include "connection.php";
$pname= $_POST['pname'];
$tinno= $_POST['tinno'];
$gstno= $_POST['gstno'];
$contact= $_POST['contactno'];
$state= $_POST['state'];
$statecode= $_POST['statecode'];
$address= $_POST['address'];
$sgst= $_POST['sgst'];
$cgst= $_POST['cgst'];
$igst= $_POST['igst'];

$conn->query("CREATE TABLE IF NOT EXISTS party_detail(no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(200),tno VARCHAR(100),address VARCHAR(250),contactno VARCHAR(50),gstno VARCHAR(50),state VARCHAR(50),statecode VARCHAR(20),sgst VARCHAR(10),cgst VARCHAR(10),igst VARCHAR(10))");

$res = $conn->query("INSERT INTO party_detail (name,tno,address,contactno,gstno,state,statecode,sgst,cgst,igst) VALUES('$pname','$tinno','$address','$contact','$gstno','$state','$statecode','$sgst','$cgst','$igst')");

$ptable = partytable($pname);

if($res){echo "Successfully added";}
else{
	$sq= $conn->query("SELECT name from party_detail where name='$pname'");
	if(mysqli_num_rows($sq) != 0){
			$dq= $conn->query("UPDATE party_detail set tno='$tinno' , address='$address',contactno='$contact',gstno='$gstno',state='$state',statecode='$statecode' ,sgst='$sgst',cgst='$cgst',igst='$igst' where name='$pname'");
			if($dq){echo $pname." detail updated";
				$newptable = partytable($pname);
				$conn->query("RENAME TABLE $ptable TO $newptable");
				$ptable =$newptable;
		    }
			else{
					echo "Error";
					die();
			}
	}else{
			echo "System error Contact Developer";
			die();
	}
}

$ff= $conn->query("CREATE TABLE IF NOT EXISTS $ptable (
no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date1 date,
credit VARCHAR(30) NOT NULL,
debit VARCHAR(30) NOT NULL)");

?>
