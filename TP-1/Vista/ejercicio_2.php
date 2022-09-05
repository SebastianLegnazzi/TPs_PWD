<?php
include_once "../../cabecera/cabecera-php.php"
?> 
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <script src="js/verificarInputVacio.js"></script>
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script>
        function funcion_vacio(arrayInput){
            let arrayDias = [],inputCompleto = false;
            var i  = 0;
            for(let input of arrayInput){
                arrayDias.push(input.value);
            }
            while (!inputCompleto && i < arrayDias.length){
                if(arrayDias[i] != ""){
                    inputCompleto = true;
                }else{
                    i++;
                }
            }
            if(!inputCompleto){
                alert("Debes llenar almenos 1 campo para enviar!");
                for (let input of arrayInput){
                    input.style="border: 1px solid red";
                }
            }else{
                for (let input of arrayInput){
                    input.style="border: 1px solid green";
                }
            }
            return inputCompleto;
        }
    </script>
</head>
<body>
    <form action="ejercicio_2_Respuesta.php" class="needs-validation row g-3" novalidate method="get">
        <div class="col-md-4 m-4">
            <label>Hora de cursada del Lunes: </label><input type="number" name="lunes" id="lunes" class="input_dato form-control" required><br>
            <label>Hora de cursada del Martes: </label><input type="number" name="martes" id="martes" class="input_dato form-control" required><br>
            <label>Hora de cursada del Miercoles: </label><input type="number" name="miercoles" id="miercoles" class="input_dato form-control" required><br>
            <label>Hora de cursada del Jueves: </label><input type="number" name="jueves" id="jueves" class="input_dato form-control" required><br>
            <label>Hora de cursada del Vienres: </label><input type="number" name="viernes" id="viernes" class="input_dato form-control" required><br>
            <input type="submit" name="boton_enviar" id="boton_enviar" class="btn btn-primary mt-2" onclick="return funcion_vacio(document.getElementsByClassName('input_dato'))">
        </div>
    </form>
<?php
    include_once "../../cabecera/footer-php.php"
?>