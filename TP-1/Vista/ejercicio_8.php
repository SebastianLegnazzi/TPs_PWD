<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    <script>
        function validarInputVacio(){
            let input_estudiante1 = document.getElementById("input_Estudiante1");
            let input_estudiante2 = document.getElementById("input_Estudiante2");
            let input_edad = document.getElementById("input_edad").value;
            if(input_estudiante1.checked || input_estudiante2.checked && !isNaN(input_edad)){
                datosValidos = true;
            }else{
                datosValidos = false;
                alert("Los datos son incorrectos! porfavor reviselos nuevamente");
            }
            return false;
        }
    </script>
</head>
<body>
    <form action="../Control/ejercicio_8.php" method="post">
        <label>Edad </label><input type="text" name="input_edad" id="input_edad"><br>
        <p>Es estudiante?</p>
        <input type="radio" value="1" name="input_Estudiante" id="input_Estudiante1"><label for="input_Estudiante1">Si</label>
        <input type="radio" value="2" name="input_Estudiante" id="input_Estudiante2"><label for="input_Estudiante2">No</label><br>
        <input type="submit" name="boton_enviar" id="boton_enviar" onclick="return validarInputVacio()">
        <input type="reset" name="boton_limpiar" id="boton_limpiar">
    </form>
</body>
</html>