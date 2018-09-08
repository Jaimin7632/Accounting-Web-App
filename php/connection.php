<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sutc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function partytable($pname){
	global $conn;
		$rr= $conn->query("SELECT * from party_detail where name='$pname'");
	$r=mysqli_fetch_assoc($rr);
	$gstno = $r['gstno'];
	$pname= str_replace(" ", "", $pname);
	$pname =preg_replace('/[^A-Za-z0-9\-]/', '', $pname);
	$returnName="";
	if(strlen($pname) < 4){
		$returnName=$pname.$gstno;
	}else{$returnName=substr($pname,0,3).$gstno;}
	return $returnName;
}
function removeq($s) {
    $result = preg_replace("/[^a-zA-Z0-9]+/", "", html_entity_decode($s, ENT_QUOTES));
    return $result;
}

?>