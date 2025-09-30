
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
<div class="caja"> 
    <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/showdown/shiny/376.gif" height="auto" width="50%">

</div>

<?php
$cadena = file_get_contents("https://pokeapi.co/api/v2/pokemon/metagross");
$data = json_decode($cadena, true);
$array = [];

foreach ($data['stats'] as $stat) {
    $nombre = $stat['stat']['name'];
    $valor = $stat['base_stat'];
    $array[$nombre] = $valor;
if ($valor > 131) {
    echo "\n" ."<p>El valor más alto es: $nombre con un valor de $valor </p>";
}

}
?>
</body>
</html>