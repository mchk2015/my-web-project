<?php
header('Content-type: application/json');
$outStr = $_POST["user"]."'s Email Address is set to ";
$outStr .= $_POST["email"].".";
echo '{"msg":"'.$outStr.'"}';
return;
?>