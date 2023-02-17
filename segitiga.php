 
<?php

$angka =  $_GET['angka'];
if($angka == null || $angka == ''){
    echo json_encode([
        'message' => 'harap isi form',
        'status' => 'error'
    ]);
    die();
}
$arrayAngka = str_split($angka);
$jumlahArray = count($arrayAngka);
$result = '';
// Generate Segitiga
$y = 1;
for($i = 0; $i < $jumlahArray;$i++ ){
    $result .= $arrayAngka[$i];
    for($x = 0;$x<$y;$x++){
        $result .=  '0'; 
    }
    $result .= ' <br>';
    $y++;
}

echo json_encode([
    'message' => 'sukses mengambil data',
    'status' => 'sukses',
    'data' => $result
]);

