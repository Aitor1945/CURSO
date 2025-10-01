
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$cadena = file_get_contents("https://rickandmortyapi.com/api/character");
$data = json_decode($cadena, true);
$array = [];
foreach ($data['results'] as $resultado ) {
    $id = $resultado['id'];
    $nombre = $resultado['name'];
    $status = $resultado['status'];
    $especie = $resultado['species']; 
    $array[] = ['id'=> $id,'nombre'=> $nombre,'status'=> $status,'especie'=> $especie];
}

$personaje = "";
$random = rand(1, $id);
for ($i = 0; $i < count($array); $i++){
if ($random == $array[$i]['id']){
$personaje .= $array[$i]['nombre'] . " " . $array[$i]['status'] . " " . $array[$i]['especie'];


echo $personaje;
}
}
?>

</body>
</html>