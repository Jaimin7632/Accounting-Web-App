<?php
include "connection.php";
$pname =$_POST['name'];
$tamount =$_POST['amount'];
$date1 =$_POST['date1'];
$method =$_POST['method'];
$ptable=partytable($pname);
if($method == "pay"){
    $tt= $conn->query("INSERT INTO $ptable (date1,credit,debit) VALUES ('$date1','$tamount','')");
    echo "Success";
}
else if ($method =="receive") {
    $t= $conn->query("INSERT INTO $ptable (date1,credit,debit) VALUES ('$date1','','$tamount')");
    echo "Success";
}else{
    echo "error";
}
?>