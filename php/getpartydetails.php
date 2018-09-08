<?php
include "connection.php";
$p =$_POST['name'];
$res = $conn->query("SELECT * from party_detail where name='$p'");

$outp = "";
if(mysqli_num_rows($res) != 0){
    while($rs = $res->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["name"] . '",';
    $outp .= '"tno":"'   . $rs["tno"]        . '",';
    $outp .= '"address":"'   . $rs["address"]        . '",';
    $outp .= '"contactno":"'   . $rs["contactno"]        . '",';
     $outp .= '"sgst":"'   . $rs["sgst"]        . '",';
    $outp .= '"cgst":"'   . $rs["cgst"]        . '",';
    $outp .= '"igst":"'   . $rs["igst"]        . '",';
    $outp .= '"gstno":"'   . $rs["gstno"]        . '",';
    $outp .= '"state":"'   . $rs["state"]        . '",';
    $outp .= '"statecode":"'. $rs["statecode"]     . '"}';
    }

}else{
    echo "khedut";
}
echo($outp);

?>