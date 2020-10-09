<?php
$produk = [
    ["Jaket", "Absolute", 200000],
    ["Jaket", "Familias", 500000],
    ["Tas", "Pollo",100000],
    ["Tas", "Palazzo",200000],
    ["Jaket", "Wetsbrook", 200000],
    ["Jaket", "Supreme", 200000],
    ["Sepatu", "Converse",200000],
    ["Sepatu", "Rebook",400000],
    ["Sepatu", "Adidas",200000],
    ["Jaket", "Rillingen", 200000],
    ["Sepatu", "Fila", 500000],
    ["Sepatu", "Vans", 100000],
    ["Tas", "Gucci",500000],
    ["Tas", "Abslt",200000],
    ["Sepatu", "Patrobas", 200000],
    ["Sepatu", "Warior",100000],
    ["Sepatu", "Mizuno",800000],
    ["Jaket", "Fila", 200000],
    ["Tas", "ARei",200000],
    ["Jaket", "Tractop", 100000],
    ["Sepatu", "Nike",300000],
    ["Tas", "Familias",200000],
    ["Tas", "Eiger",200000],
    
];

// $tem_arr=[];
// foreach($produk as $value){
//     echo $tem_arr[]=$value[0].$value[1],$value[2].PHP_EOL;
// }

$temp_arr=[];
foreach ($produk as $key) {
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
foreach($pilihan as $value){
    echo $value.PHP_EOL;
}