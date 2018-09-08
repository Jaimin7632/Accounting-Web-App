<?php
include "connection.php";

$product= $_POST['product'];
$r = $conn->query("DELETE FROM product_detail WHERE name='$product'");
if($r){ echo $product." deleted";}
else{ echo "error";}



?>