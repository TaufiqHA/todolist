<?php 

$d = $_POST;
$location = "../../public";
$file = "../Model/data.json";
$todo = file_get_contents($file);
$data = json_decode($todo, true);

for($i = $d['number']; $i < sizeof($data); $i++)
{
    $data[$i] = $data[$i + 1];
};

if ($d['number'] <= sizeof($data)) 
{
    unset($data[sizeof($data)]);
}else {
    header('Location: ' . $location);
}

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);
$todo = file_put_contents($file, $jsonfile);
header('Location: ' . $location);