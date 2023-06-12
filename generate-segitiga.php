<?php 
$input = $_GET["nilai"];
$inputStr = strval($input);
$length = strlen($inputStr);
$result = [];

for ($i = 0; $i < $lengthl; $i++) {
    $row = str_repeat("0", $i) . substr($inputStr, $i, 1) . str_repeat("0", array_push($result, $row));
}

echo json_encode(["segitiga" => $result]);

?>