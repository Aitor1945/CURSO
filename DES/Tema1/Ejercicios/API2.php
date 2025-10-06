<?php
$cacheFile = "characters.json";

// Si ya existe y no tiene más de 1 día lo usamos
if (file_exists($cacheFile) && time() - filemtime($cacheFile) < 86400) {
    $all = json_decode(file_get_contents($cacheFile), true);
} else {
    // Si no existe descargamos TODO y lo guardamos
    $url="https://rickandmortyapi.com/api/character";
    $all = [];
    do {
        $datos=file_get_contents($url);
        $datos=json_decode($datos,true);
        foreach($datos["results"] as $personaje){
            $all[] = $personaje;
        }
        $url = $datos["info"]["next"];
    } while($url != null);

    file_put_contents($cacheFile, json_encode($all));
}

// Ahora sí: personaje aleatorio
$indice = array_rand($all);
$personaje = $all[$indice];

// Funciones de conteo
function contarPorEstado($array, $estado) {
    $contador = 0;
    foreach ($array as $p) {
        if (strtolower($p["status"]) === strtolower($estado)) {
            $contador++;
        }
    }
    return $contador;
}

function contarPorNombre($array, $cadena) {
    $contador = 0;
    foreach ($array as $p) {
        if (preg_match("/$cadena/i", $p["name"])) {
            $contador++;
        }
    }
    return $contador;
}


// Contadores (solo se calculan una vez por recarga, ya con datos cacheados)
$totalVivos   = contarPorEstado($all, "Alive");
$totalMuertos = contarPorEstado($all, "Dead");
$totalRicks   = contarPorNombre($all, "Rick");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Rick & Morty</title>
    <link rel="stylesheet" href="rick.css">
</head>
<body>
<div class="container">
    <div class="card">
        <img src="<?php echo $personaje["image"]; ?>" alt="Foto del personaje">
        <div class="info">
            <p><strong>ID:</strong> <?php echo $personaje["id"]; ?></p>
            <p><strong>Nombre:</strong> <?php echo $personaje["name"]; ?></p>
        </div>
    </div>

    <div class="card details">
        <h3><strong>Detalles</strong></h3>
        <p><strong>Vivos:</strong> <?php echo $totalVivos; ?></p>
        <p><strong>Muertos:</strong> <?php echo $totalMuertos; ?></p>
        <p><strong>Ricks:</strong> <?php echo $totalRicks; ?></p>
        <br><br>
        <button onclick="location.reload()">Nuevo personaje</button>
    </div>
</div>
<script></script>
</body>
</html>
