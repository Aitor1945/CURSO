<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aitor Garcia DIW Tema3</title>
    <link rel="stylesheet" href="css2.css">


</head>
<body>
<form>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Escribe tu nombre">
        <label for="apodo">Apodo:</label>
        <input type="text" id="apodo" name="apodo" placeholder="Tu apodo">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="email@example.com">
        <input type="checkbox" id="acepto" name="acepto" required>
        <label for="acepto">Acepto términos y condiciones</label>
        <p>Género:</p>
        <input type="radio" name="genero" value="masculino" required>
        <label>Masculino</label>
        <input type="radio" name="genero" value="femenino" required>
        <label>Femenino</label>
        <label for="deshabilitado">Campo deshabilitado:</label>
        <input type="text" id="disabled" name="disabled" disabled value="No editable">
        <div class="formulario">
        <button type="submit">Registrar</button>
        </div>
    </form>
<p class = "hola">Texto fuera del formulario</p>
<p class = "hola">Texto fuera del formulario</p>
<p class = "ola">Texto fuera del formulario</p>
<p class = "ola">Texto fuera del formulario</p>
</body>
</html>