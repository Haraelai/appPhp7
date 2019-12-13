<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XD</title>
    <link rel="stylesheet" href="CSS/estilos.css"/>
    <link rel="stylesheet" href="CSS/menu.css"/>
    <link rel="stylesheet" href="CSS/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>

<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
        <li><a href="#">Ambriz Laines Angel - 16091063</a></li>
      </ul>
      </nav>
    </header>
    <section id="contenedor">
    <section class="problema">
    <h2>Problema: Calcular</h2>
    <p>Descripción:</p>
    <p>Un cuerpo es lanzado verticalmente hacía arriba con una velocidad inicial de 30m/s donde se desprecia
                la resistencia del aire. Conteste los siguientes incisos del problema.<br><br>

                a). ¿Cuál será la velocidad del cuerpo 2 segundos después de su lanzamiento?<br><br> 
                    
                b). ¿Cuánto tarda el cuerpo en llegar al punto más alto de su trayectoria?<br><br>

                c). ¿Cuál es la altura máxima alcanzada por el cuerpo?
    </p>           
      </section>

      <section class="datos">
            <center><h2>Datos</h2></center>
            <p>
                V0 = 30  <br>g = -9.8<br> V = 0, en el punto más alto. V = 30.
            </p>
      </section>
      <section class="formulas">
            <center><h2>Fórmulas</h2></center>
            <p>
               a) v = V <SUB>0</SUB> + (g)(t)<br>
               b) t = V<SUB>0</SUB> (t) + (g * t * t / 2)<br>
               c) h = V<SUB>0</SUB> <sup>2</sup> / 2 (g)<br> 
            </p>
      </section>
 
      <section class="calculos">
          <center><h2>Solución</h2></center>  

          <?php
            function calcula_velocidad(){
      
                $velocidadCero = 30; 
                $gravedad = -9.8;

                $velocidad = $velocidadCero+$gravedad*2;
                return $velocidad;    
            }

            function calcula_tiempo(){
                
                $velocidadCero = 30;
                $gravedad = 9.8;

                $tiempo = $velocidadCero/$gravedad;
                return $tiempo;
            }

            function calcula_altura(){

                $gravedad = 9.8;

                $altura = pow(30,2)/2*$gravedad;
                return $altura;

            }

          ?>

        <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <?php
        print " <h1>a) Velocidad = ".calcula_velocidad(). " </h1> ";
        print " <h1>b) Tiempo = ".calcula_tiempo(). " </h1> ";
        print " <h1>c) Altura = ".calcula_altura(). " </h1> ";
        ?>
      </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2019 
    </footer>
 </section>
</body>
</html>
