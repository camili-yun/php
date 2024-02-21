<html>
    <head>
        <title>Problema-OmegaUp</title>
    </head>
    <body>
        <h1 class="titulos">13433. Estaciones del Año</h1>
        <table class="tabla1" border="1" align="center">
            <tr>
                <td><h4>Puntos</h4></td>
                <td>23.98</td>
                <td><h4>Límite de memoria</h4></td>
                <td>32 <br>MiB</td>
            </tr>
            <tr>
                <td><h4>Límite de <br> tiempo (caso)</h4></td>
                <td>1s</td>
                <td><h4>Límite de <br> tiempo (total)</h4></td>
                <td>1m0s</td>
            </tr>
            <tr>
                <td><h4>Tamaño límite de <br> entrada (bytes)</h4></td>
                <td>10  <br> KiB</td>
            </tr>
        </table>
        <h3>DESCRIPCION</h3>
        <p class="p1"> Brithany quiere combinar la programación con el inglés, y se encuentra 
            empezando a usar las estructuras de control selectivas en la programación estructurada, 
            como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) 
            del año pertenece una fecha en especifico compuesta por un día y un mes m según lo siguiente:</p>
           
            <p>1. Winter del 21 de diciembre al 20 de marzo
           2. Spring del 21 de marzo al 21 de junio
           3. Summer del 22 de junio al 22 de septiembre
           4. Fall del 23 de septiembre al 20 de diciembre </p> <br>

          <h4 class="Considerando la siguiente cantidad de días para cada mes:"></h4>
          <p>
         1. Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días
         2. Abril, Junio, Septiembre y Noviembre 30 días
         3. Febrero 28 días
         4. Cualquier fecha fuera de estos rangos debe considerarse como no existente
          </p>
          <p>Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.</p>
        </p>
        <h3>Entrada</h3>
        <p>
        Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada
        </p>
        <h3>Salida</h3>
        <p>
        Una cadena S
        que indique la estación del año a 
        la que pertenece la fecha ingresada o un mensaje 
        que indique no existe la fecha, si la fecha no es válida
        </p>
        <h3>Ejemplo: </h3>
        <table class="tabla2" border="1">
            <tr>
                <td><h4>Entrada</h4></td>
                <td><h4>Salida</h4></td>
            </tr>
            <tr>
                <td align="center">15 <br> 10</td>
                <td align="center">FALL</td>
            </tr>
            <tr>
                <td align="center">22 <br> 3</td>
                <td align="center">Spring</td>
            </tr>
            <tr>
                <td align="center">31 <br> 4</td>
                <td align="center">no existe la fecha</td>
            </tr>
        </table>
        
    <br>
    <br>
    <h1 align="center">B. ¿Cuántos valen 7?</h1>
<br>
<h2>DESCRIPCION</h2>
<p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 
7.</p>
<br>
<h2>ENTRADA</h2>
<p>Dos enteros en el rango de 
 -100 a +100.</p>
 <br>
 <h2>SALIDA</h2>
 <p>La cantidad de enteros iguales a 7.</p>
<br>
<h3>Ejemplo: ......</h3>
        <table class="tabla2" border="1">
            <tr>
                <td><h4 align="center">Entrada</h4></td>
                <td><h4 align="center">Salida</h4></td>
            </tr>
            <tr>
                <td align="center">-3 8  </td>
                <td align="center">0</td>
            </tr>
            <tr>
                <td align="center">7 57</td>
                <td align="center">1</td>
            </tr>
            <tr>
                <td align="center">62 7</td>
                <td align="center">1</td>
            </tr>
            <tr>
                <td align="center">7 7</td>
                <td align="center">2</td>
            </tr>
        </table>
        <?php  
            $a=-3;
            $b=8;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }

            $a=7;
            $b=57;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }

            $a=62;
            $b=7;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }

            $a=7;
            $b=7;
            if($a==7 && $b==7)
            {
                echo "2","<br>";
            }
            if($a!=7 && $b==7)
            {
                echo "1","<br>";
            }
            if($a==7 && $b!=7)
            {
                echo "1","<br>";
            }
            if($a!=7 && $b!=7)
            {
                echo "0","<br";
            }
        ?>
    </body>
</html>
        <h1 align="center">C. El mayor de tres números</h1>
<br>
<h2>DESCRIPCION</h2>
<p>Realiza un problema que imprima el mayor de tres números.</p>
<br>
<h2>ENTRADA</h2>
<p>Escribe tres números enteros a,b y c</p>
 <br>
 <h2>SALIDA</h2>
 <p>El número entero mayor de los tres números introducidos.</p>
<br>
<h3>Ejemplo:</h3>
        <table class="tabla2" border="1">
            <tr>
                <td><h4 align="center">Entrada</h4></td>
                <td><h4 align="center">Salida</h4></td>
            </tr>
            <tr>
                <td align="center">10 
                    8
                    -7 </td>
                <td align="center">10</td>
            </tr>
            <tr>
                <td align="center">10
                    81
                    101</td>
                <td align="center">101</td>
            </tr>
            <tr>
                <td align="center">11
                    11
                    11</td>
                <td align="center">11</td>
            </tr>
            <tr>
                <td align="center">10
                    810
                    101</td>
                <td align="center">810</td>
            </tr>
        </table>
        <?php
                $a=10;
                $b=8;
                $c=-7;
                echo " <br> LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c;
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }

                $a=10;
                $b=81;
                $c=-101;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c,"<br>";
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }

                $a=11;
                $b=11;
                $c=11;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c,"<br>";
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }

                $a=10;
                $b=810;
                $c=101;
                echo "LOS VALORES SON: ",$a," ",$b," ",$c,"<BR>";
                if($a<$b && $b<$c)
                {
                    echo "EL MAYOR ES: ",$c,"<br>";
                }
                elseif($a>$b && $a>$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                elseif($a==$b && $b==$a && $b==$c)
                {
                    echo "EL MAYOR ES: ",$a,"<BR>";
                }
                else
                {
                    echo "EL MAYOR ES: ",$b,"<BR";
                }
            ?>
    </body>
</html>


