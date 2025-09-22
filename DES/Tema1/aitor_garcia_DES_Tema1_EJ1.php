<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        echo "Hola mundo";
    ?>
    <form method="post">
        <label for="year">Introduce un año:</label>
        <input type="number" name="year" id="year" required>
        <button type="submit">Comprobar</button>
    </form>
    <?php
    function esBisiesto($year) {
        return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
    }

if (isset($_POST["year"])) {
    $year = $_POST["year"];
    if (esBisiesto($year)) {
        echo "<p>El año $year es bisiesto.</p>";
    } else {
        echo "<p>El año $year no es bisiesto.</p>";
    }
}
    ?>
</body>
</html>