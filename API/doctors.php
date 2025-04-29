<?php
header('Content-Type: application/json');

$doctors = [
    ['id' => 1, 'name' => 'Dr. Ahmad', 'specialization' => 'Umum', 'location' => 'Jakarta'],
    ['id' => 2, 'name' => 'Dr. Budi', 'specialization' => 'Jantung', 'location' => 'Bandung']
];

$filtered = array_filter($doctors, function($doctors){
    $match = true;
    if (isset($_GET['specialization']) && $_GET['specialization'] !== '') {
       $match = $match && (strpos($doctors['specialization'],$_GET['specialization']) !== false);
    }

    if (isset($_GET['location']) && $_GET['location'] !== '') {
        $match = $match && (strpos($doctors['location'],$_GET['location']) !== false);
    }
    return $match;
});

echo json_encode(array_values($filtered), JSON_PRETTY_PRINT)
?>