<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validador Montaña Rusa</title>
    
</head>
<body>
    <h1>Formulario de Validación para la Montaña Rusa</h1>
    <form action="validador.php" method="POST">
        <label for="altura">Altura (cm):</label>
        <input type="text" id="altura" name="altura" pattern="\d+" title="Solo números" required>
        <br><br>
        <label for="edad">Edad (años):</label>
        <input type="number" id="edad" name="edad" min=">=16" required>
        <br><br>
        <label>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label><br>
        <input type="radio" id="rechazo_si" name="rechazo" value="si" required>
        <label for="rechazo_si">Sí</label><br>
        <input type="radio" id="rechazo_no" name="rechazo" value="no" required>
        <label for="rechazo_no">No</label>
        <br><br>
        <input type="submit" value="Validar">
        
    </form>
    
</body>
</html>
       
        
