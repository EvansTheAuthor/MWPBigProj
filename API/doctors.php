<?php
header('Content-Type: application/json');

$doctors = [
    ['id' => 1, 'name' => 'Dr. Ahmad', 'specialization' => 'Umum', 'location' => 'Jakarta'],
    ['id' => 2, 'name' => 'Dr. Budi', 'specialization' => 'Jantung', 'location' => 'Bandung']
];

$filtered = array_filter(array: $doctors, function($doctors){
    $match = true;
    if (isset($_GET['specialization']) && $_GET['specialization'] !== '') {
       $match = $match && (strpos($doctors['specialization'],$_GET['specialization']) !== false);
    }
    return $match
});

echo json_encode(array_values($filtered))
?>