<?php
header('Content-Type: application/json');
$data = array("key1" => "value1", "key2" => "value2");
echo json_encode($data);
?>
