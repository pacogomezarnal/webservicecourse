<?php
require_once("encode.php");

$jsonObject=new encode();

echo $jsonObject->encodeJSON("OK");
?>