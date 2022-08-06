<?php 

$d = $_POST;
$location = "../../public";

$file = '../Model/data.json';
$todo = file_get_contents($file);
$data = json_decode($todo, true);

if(!empty($data))
{
    $number = sizeof($data);
}else {
    $number = 0;
}

$data[$number + 1] = array(
    $d['tambah']
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
$todo = file_put_contents($file, $jsonfile);
header('Location: ' . $location);