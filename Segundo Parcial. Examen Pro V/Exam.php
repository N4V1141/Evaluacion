<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de Evaluación</title>
    <link rel="stylesheet" href="exam.css"> <!-- Asegúrate de tener esta línea -->
</head>
<body>
<div id="contenedor">
    <h2>Resultado de la Evaluación</h2>
    <?php
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $genero = $_POST['genero'];
    $materia = $_POST['materia'];
    $cal1 = $_POST['cal1'];
    $cal2 = $_POST['cal2'];
    $cal3 = $_POST['cal3'];

    // Inicia variables
    $suma = 0;
    $cantidad = 0;

    // Suma calificaciones que sean válidas
    if ($cal1 !== "") {
        $suma += $cal1;
        $cantidad++;
    }
    if ($cal2 !== "") {
        $suma += $cal2;
        $cantidad++;
    }
    if ($cal3 !== "") {
        $suma += $cal3;
        $cantidad++;
    }

    // Calcula promedio
    if ($cantidad > 0) {
        $promedio = $suma / $cantidad;
    } else {
        $promedio = 0;
    }

    // Determina estatus calificado
    if ($promedio >= 6) {
        $estatus = "Aprobado";
    } else {
        $estatus = "No aprobado";
    }
    ?>

    <table style="margin: 0 auto;">
        <tr><td><b>Nombre:</b></td><td><?php echo $nombre; ?></td></tr>
        <tr><td><b>Género:</b></td><td><?php echo $genero; ?></td></tr>
        <tr><td><b>Materia:</b></td><td><?php echo $materia; ?></td></tr>
        <tr><td><b>Calificación 1:</b></td><td><?php echo $cal1; ?></td></tr>
        <tr><td><b>Calificación 2:</b></td><td><?php echo $cal2; ?></td></tr>
        <tr><td><b>Calificación 3:</b></td><td><?php echo $cal3; ?></td></tr>
        <tr><td><b>Promedio:</b></td><td><?php echo number_format($promedio, 2); ?></td></tr>
        <tr><td><b>Estatus:</b></td><td><?php echo $estatus; ?></td></tr>
    </table>
</div>
</body>
</html>