<?php

// $mahasiswa = [
//     [
//         "nama" => "annisa chairani rangkuti",
//         "nim" => "2217020149",
//         "email" => "annisacchairani@gmail.com"
//     ],
//     [
//         "nama" => "muhammad royhan rangkuti",
//         "nim" => "2217020150",
//         "email" => "royhan@gmail.com"
//     ],
//     [
//         "nama" => "ahmad ramadhan rangkuti",
//         "nim" => "2217020151",
//         "email" => "aldi@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=uasapi', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>