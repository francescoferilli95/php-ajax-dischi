<?php

require_once __DIR__ . '/database.php';

    $filtered = [];
    $artist = [];
    
    foreach ($database as $v) {
        $artist[] = $v['author'];
    }

    if (empty($_GET['query']) || $_GET['query'] === 'All') {
        $filtered = $database;
    } else {
        foreach($database as $value) {

            if ($_GET['query'] === $value['author']) {
                $filtered[] = $value;
            }
        }
    };



    $data = [
        'filtered' => $filtered,
        'artist' => $artist,
    ];

    header('Content-Type: application/json');

    echo json_encode($data);
?>