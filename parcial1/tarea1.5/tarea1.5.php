<html>
    <body>
        <?php
       
            $a=array();
            $b=rand(1,10);
            $x=0;
            $contadorDeAlumnos=0;
            $contadorDeAlumnosVajos=0;
            for($i=0;$i<=$b;$i++)
            {
                array_push($a, rand(0,10));
                echo $a[$i], " ";
            }
            echo "<br>";
            echo "<br> Numeros generados: ", $b+1, "<br>";
            for($j=0;$j<=$b;$j++)
            {
                $x=$a[$j]+$x;
            }
            $promedio=$x/$b;
            echo "<br> EL PROMEDIO DE TODO ES: ",round($promedio,2) ,"<br>";
            for($y=0;$y<$b;$y++)
            {
                if($a[$y]>=$promedio)
                {
                    $contadorDeAlumnos=$contadorDeAlumnos+1;
                }
                else
                {
                    $contadorDeAlumnosVajos=$contadorDeAlumnosVajos+1;
                }
            }
            $contadorDeAlumnosVajos=$contadorDeAlumnosVajos+1;
            $w=0;
            for($k=0;$k<$b;$k++)
            {
                $e=($a[$k]-$promedio);
                $e=($e*$e)+$w;
            }
            $m=$w/($b-1);
            $n=sqrt($m);
            echo "<br> LA DESVIACION ESTANDAR ES DE: ",$n,"<br>";

            $n=($contadorDeAlumnosVajos/$b)*100;
            echo " <br> EL PORCENTAJE DE ALUMNOS REPROBADOS ES DEL: ",round($n,2) ,"%","<br>";
            echo "<br> EL TOTAL DE ALUMNOS MENORES AL PROMEDIO SON: ",round($contadorDeAlumnosVajos,2),"<br>";
            $z=($contadorDeAlumnos/$b)*100;
            echo "<br> EL PORCENTAJE DE ALUMNOS APROBADOS ES DEL: ",round($z,2),"%","<br>";
            echo "<br> EL TOTAL DE ALUMNOS MAYORES AL PROMEDIO SON: ",round($contadorDeAlumnos,2),"<br";
           
           
        ?>
    </body>
</html>
