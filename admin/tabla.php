<?php 
    function tabla($conexion,$tabla,$var){
        require './filtroresults.php';
        if(isset($numero) && isset($busq)){
            $nr = str_replace("'","",$numero);
            if($busq === ''){
                $query = "select * from $tabla limit $nr";
            }
            else{
                $resultC = columnas($tabla,$conexion);;
                $n = 0;
                while($filas2=pg_fetch_array($resultC)){
                    if($n === 1){
                        $nomb = $filas2['column_name'];
                        break 1;
                    }
                    $n++;
                }
                $query1 = "select * from $tabla where UNACCENT($nomb) ilike '%$busq%' limit $nr";
                $result2 = pg_query($conexion,$query1);
                if(pg_num_rows($result2) > 0 && $result2){
                    $query = $query1;
                }
                else{
                    $mensaje = "NO EXISTE UN DATO CON LA INFORMACION INGRESADA.";
                    echo '<script type="text/javascript">
                window.location="./user.php?mes='.$mensaje.'";
                </script>';
                }
            }
        }
        else{
            $query = "select * from $tabla limit 5";
        }
        $resultado=pg_query($conexion,$query) or die("Error al consultar usuarios");
        echo "<table>
        <thead class='head'><td id=iz>Cod pais</td><td>Nombre</td><td id=der>Opciones</td></thead>";
        while($filas=pg_fetch_array($resultado)){
            echo "<tr class='linea'><td id='izq'>".$filas["cod_pais"]."</td>";
            $valor = $filas["cod_pais"];
            echo "<td>".$filas["nomb_pais"]."</td>";
            echo "<td><section class='botones'>
            <a href='./delete.php?valor=".$valor."&tabla=".$tabla."&var=".$var."'><img id='imgborrar' src='https://ayudawp.com/wp-content/uploads/2018/04/borrar-plugins-wordpress.png' width='40px'></a>
            <a href='./edit.php?valor=".$valor."&tabla=".$tabla."&var=".$var."' ><img id='imgeditar' src='https://cdn.pixabay.com/photo/2017/06/06/00/33/edit-icon-2375785_960_720.png' width='35px'></a>
            </section></td>";
        }echo "</table>";
    }
?>

<?php 
    function filtro($conexion,$tabla,$query){
        $resultado = pg_query($conexion,$query);
        $nr = pg_num_rows($resultado);
        echo '<section class="buscador">';
        echo    '<form action="user.php" method="POST" class="formulario">';
        echo     '<input class="texto-ingreso" type="search" name="busq" placeholder="Buscar dato por nombre" autocomplete="off">';
        echo        '<select name="numero" class="seleccion">';
        echo            '<option value="5" selected>5</option>';
        echo            '<option value="10">10</option>';
        echo            '<option value="'.$nr.'">'.$nr.'</option>';
        echo        '</select>';
            
        echo    '<input class="img-buscador" type="image" src="https://image.flaticon.com/icons/png/128/2932/2932802.png">';
        echo    '</form>';
        echo '</section>';

    }
?>