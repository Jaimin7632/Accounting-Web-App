<?php
include "connection.php";

$party= $_POST['party'];
$ptable= partytable($party);
$r = $conn->query("DELETE FROM party_detail WHERE name='$party'");

$u =$conn->query("DROP TABLE $ptable");
if($r && $u){ echo $party." deleted";}
else{ echo "error";}



?>