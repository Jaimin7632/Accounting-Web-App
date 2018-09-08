<?php
include "connection.php";
$pname= $_GET['name'];
$ptable=partytable($pname);
$result = $conn->query("SELECT * FROM $ptable ORDER BY date1 DESC");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $n = explode('-', $rs["date1"]);
    $ada = $n[2].' / '.$n[1].' / '.$n[0];
    $outp .= '{"no":"'  . $rs["no"] . '",';
    $outp .= '"date":"'   . $ada        . '",';
    $outp .= '"credit":"'   . $rs["credit"]        . '",';
    $outp .= '"debit":"'. $rs["debit"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);


?>