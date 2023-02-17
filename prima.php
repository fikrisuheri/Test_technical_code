<?php

$angka =  $_GET['angka'];
$result = '';
if($angka == null || $angka == ''){
    echo json_encode([
        'message' => 'harap isi form',
        'status' => 'error'
    ]);
    die();
}
// Generate Bilangan Prima
for($i = 0 ; $i <= $angka; $i++){
   $y = 0;
   for($x = 1;$x<= $i;$x++ ){
        if($i % $x == 0){
            $y++;
        }
   }

   if($y == 2){
    $result .= $i . ' ';
   }
}

echo json_encode([
    'message' => 'sukses mengambil data',
    'status' => 'sukses',
    'data' => $result
]);

