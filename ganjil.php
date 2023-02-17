<?php

$angka =  $_GET['angka'];
if($angka == null || $angka == ''){
    echo json_encode([
        'message' => 'harap isi form',
        'status' => 'error'
    ]);
    die();
}
$result = '';
// Generate Bilangan Ganjil
$result .= 0 . ' ';
for($i = 0 ; $i <= $angka; $i++){
    if($i % 2 == 1){
        $result .= $i . ' ';
    }
}

echo json_encode([
    'message' => 'sukses mengambil data',
    'status' => 'sukses',
    'data' => $result
]);
