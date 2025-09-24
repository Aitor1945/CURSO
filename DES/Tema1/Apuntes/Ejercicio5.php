<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1 id="mensaje"></h1>
<script>
    var hora = new Date().getHours();

    if (hora < 12) {
        document.getElementById("mensaje").innerHTML = "Buenos días";
    } else if (hora < 20) {
        document.getElementById("mensaje").innerHTML = "Buenas tardes";
    } else {
        document.getElementById("mensaje").innerHTML = "Buenas noches";
    }
</script>
</body>
</html>