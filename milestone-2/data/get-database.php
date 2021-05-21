<?php

require_once __DIR__ . '/database.php';    

header('Content-Type: application/json');

echo json_encode($database);

?>