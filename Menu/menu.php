<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="menuCSS.css">
    <script src="menu.js"></script>
</head>
<body>
    <div class="head_principal">
        <h1>MENU PRINCIPAL PRÁCTICOS</h1>
    </div>
    <div class="conteiner_menu">
        <div class="div_tp1">
            <div class="head_menu">
                <h3>Trabajo Practico 1</h3>
            </div>
            <div class="botones_menu">
                <button class="boton_abrir boton" onclick="abrir('ejerciciosTP1')">Abrir</button>
                <button class="boton_cerrar boton" onclick="cerrar('ejerciciosTP1')">Cerrar</button>
            </div>
            <div class="lista_menu">
                <ul class="lista_desplegable" id="ejerciciosTP1">
                    <li><a href="">Ejercicio 1</a></li>
                    <li><a href="">Ejercicio 2</a></li>
                    <li><a href="">Ejercicio 3</a></li>
                    <li><a href="">Ejercicio 4</a></li>
                    <li><a href="">Ejercicio 5</a></li>
                    <li><a href="">Ejercicio 6</a></li>
                    <li><a href="">Ejercicio 7</a></li>
                    <li><a href="">Ejercicio 8</a></li>
                </ul>
            </div>
        </div>
        <div class="div_tp2">
            <div class="head_menu">
                <h3>Trabajo Practico 2</h3>
            </div>
            <div class="botones_menu">
                <button class="boton_abrir boton" onclick=" abrir('ejerciciosTP2')">Abrir</button>
                <button class="boton_cerrar boton" onclick=" cerrar('ejerciciosTP2')">Cerrar</button>
            </div>
            <div class="lista_menu">
                <ul class="lista_desplegable" id="ejerciciosTP2">
                    <li><a href="">Ejercicio 3</a></li>
                    <li><a href="">Ejercicio 4</a></li>
                </ul>
            </div>
        </div>
        <div class="div_tp3">
            <div class="head_menu">
                <h3>Trabajo Practico 3</h3>
            </div>
            <div class="botones_menu">
                <button class="boton_abrir boton" onclick=" abrir('ejerciciosTP3')">Abrir</button>
                <button class="boton_cerrar boton" onclick=" cerrar('ejerciciosTP3')">Cerrar</button>
            </div>
            <div class="lista_menu">
                <ul class="lista_desplegable" id="ejerciciosTP3">
                    <li><a href="">Ejercicio 1</a></li>
                    <li><a href="">Ejercicio 2</a></li>
                    <li><a href="">Ejercicio 3</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>