<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="js-css_Menu/menuCSS.css">
    <script src="js-css_Menu/menu.js"></script>
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
                    <li><a href="TP-1/Vista/ejercicio_1.php">Ejercicio 1</a></li>
                    <li><a href="TP-1/Vista/ejercicio_2.php">Ejercicio 2</a></li>
                    <li><a href="TP-1/Vista/ejercicio_3.php">Ejercicio 3</a></li>
                    <li><a href="TP-1/Vista/ejercicio_4.php">Ejercicio 4</a></li>
                    <li><a href="TP-1/Vista/ejercicio_5.php">Ejercicio 5</a></li>
                    <li><a href="TP-1/Vista/ejercicio_6.php">Ejercicio 6</a></li>
                    <li><a href="TP-1/Vista/ejercicio_7.php">Ejercicio 7</a></li>
                    <li><a href="TP-1/Vista/ejercicio_8.php">Ejercicio 8</a></li>
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
                    <li><a href="TP-2/Vista/ejercicio_3a,b,c.php">Ejercicio 3</a></li>
                    <li><a href="TP-2/Vista/ejercicio_4.php">Ejercicio 4</a></li>
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
                    <li><a href="TP-3/Vista/ejercicio_1.php">Ejercicio 1</a></li>
                    <li><a href="TP-3/Vista/ejercicio_2.php">Ejercicio 2</a></li>
                    <li><a href="TP-3/Vista/ejercicio_3.php">Ejercicio 3</a></li>
                </ul>
            </div>
        </div>
        <div class="div_tp4">
            <div class="head_menu">
                <h3>Trabajo Practico 4</h3>
            </div>
            <div class="botones_menu">
                <button class="boton_abrir boton" onclick=" abrir('ejerciciosTP4')">Abrir</button>
                <button class="boton_cerrar boton" onclick=" cerrar('ejerciciosTP4')">Cerrar</button>
            </div>
            <div class="lista_menu">
                <ul class="lista_desplegable" id="ejerciciosTP4">
                    <li><a href="TP-4/Vista/verAutos.php">Abrir TP</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>