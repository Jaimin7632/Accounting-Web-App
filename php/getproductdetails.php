<?php
include "connection.php";
$p =$_POST['name'];
$res = $conn->query("SELECT * from product_detail where name='$p'");

$outp = "";
while($rs = $res->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"hsn":"'   . $rs["hsn"]        . '",';
   
    $outp .= '"dquality":"'   . $rs["dquality"]        . '",';
    $outp .= '"drate":"'. $rs["drate"]     . '"}';
}

echo($outp);

?>