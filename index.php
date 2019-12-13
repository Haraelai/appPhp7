<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Science Technology Engineerig & Mathematics</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
        
        
</head>
<body>
    <section id="contenedor">
    <header id="gridHeader">
    <center><h2>Science Technology Engineerig & Mathematics</h2></center>
    <center><h2>Resolver problemas de Ciencia e Ingeniería con JS</h2></center>
    <center><h2>Nombre: Ambriz Laines Angel No. de control: 16091063</h2></center>
    </header>
    </section>
    <section id="problema"  class="gridProblema">
      <section id=descripcion>
            <center><h2>Problema</h2></center>
            <h1>Descripción:</h1>
            <p>Un cuerpo es lanzado verticalmente hacía arriba con una velocidad inicial de 30m/s donde se desprecia
                la resistencia del aire. Conteste los siguientes incisos del problema.<br><br>

                a). ¿Cuál será la velocidad del cuerpo 2 segundos después de su lanzamiento?<br><br> 
                    
                b). ¿Cuánto tarda el cuerpo en llegar al punto más alto de su trayectoria?<br><br>

                c). ¿Cuál es la altura máxima alcanzada por el cuerpo?
                    
      </section>
      <section id="datos">
            <center><h2>Datos</h2></center>
            <p>
                V0 = 30  <br>g = -9.8<br> V = 0, en el punto más alto. V = 30.
            </p>
      </section>
      <section id="formulas">
            <center><h2>Fórmulas</h2></center>
            <p>
               a) v = V <SUB>0</SUB> + (g)(t)<br>
               b) t = V<SUB>0</SUB> (t) + (g * t * t / 2)<br>
               c) h = V<SUB>0</SUB> <sup>2</sup> / 2 (g)<br> 
            </p>
      </section>
      <section id="solucion">
            <center><h2>Calculos</h2></center>
            <p> a) V(2) = 30 + (-9.8)(2) = 10.38 <sub>m/s</sub><br>
            
                b) t = 30 / 9.8 = 3.058 <sub>s</sub><br>

                c) h = (30)<sup>2</sup> / 2(9.8) = 47.86m
            </p>
                 
      </section>
      <section id="resultado">
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

                $velocidadCero = 30;
                $gravedad = 9.8;

                $altura = pow(30,2)/2*$gravedad;
                return $altura;

            }

          ?>

        <div class=solution id="resultado1">
        <?php
        print " <h1>a) Velocidad = ".calcula_velocidad(). " </h1> ";
        print " <h1>b) Tiempo = ".calcula_tiempo(). " </h1> ";
        print " <h1>c) Altura = ".calcula_altura(). " </h1> ";
        ?>
        </div><br>
      </section>
    </section>
    <footer id="gridPie">
        <p>&copy; Solution Science Problems. 2019 Creative Commons 3.0</p>
    </footer>
</body>
</html>
