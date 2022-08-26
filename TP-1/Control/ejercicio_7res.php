<html>
    <head>
    <title>TP 1 - Ejercicio 7</title>
    </head>
    <body>
        <h1>Respuesta del Servidor EJ 7</h1>
        <?php
        if (isset($_POST)){
            $op1=$_POST['op1_form'];
            $op2=$_POST['op2_form'];
            $operacion=$_POST['operacion'];
            $resultado=0;
            switch($operacion) {
                case 'Suma':
                  // code block
                  $resultado=$op1 + $op2 ;
                  echo "<h3>$op1 + $op2 = $resultado</h3><br/>";
                  break;
                case 'Resta':
                  // code block
                  $resultado=$op1 - $op2 ;
                  echo "<h3>$op1 - $op2 = $resultado</h3><br/>";
                  break;
                case 'Multiplicacion':
                  // code block
                  $resultado=$op1 * $op2 ;
                  echo "<h3>$op1 * $op2 = $resultado</h3><br/>";
                  break;
                default:
                  // code block
                  $resultado=0;
                  echo "<h3>No se especifico una operacion.</h3><br/>";
              }
            
            

        }else{
            echo "No se recibieron datos <br/>";
        }
        ?>
        <p><a href="../Vista/ejercicio_7.php">Atras</a></p>
    </body>
</html>