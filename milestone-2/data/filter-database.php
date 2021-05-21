<?php

require_once __DIR__ . '/database.php';

$authors = [];
foreach($database as $data){
    if(!in_array($data['author'], $authors))
    $authors[] = strtolower($data['author']);
}

$search = empty($_GET['author']) ? '' : strtolower($_GET['author']);

$filtered = [];
$artist = [];

if($search !== ''){
    foreach($authors as $item){
        if(strpos($item, $search) !== false){
            foreach($database as $data){
                if(strtolower($data['author']) === $item){
                    $filtered[] = $data;
                }
            }
        }
    }
} else {
    $filtered = $database;
}

    header('Content-Type: application/json');

    echo json_encode($filtered);
?>