<!doctype html>
<html lang="es">
<meta charset="UTF -8" />
    
<head>
    <title>TOUR DE FRANCIA 2021</title>
    <link rel="stylesheet" type="text/css" href="estiloInfoEquipos.css?v=<?php echo time(); ?>" />
    <link rel="shortcut icon" href="https://www.letour.fr/img/global/logo-reversed@2x.png"/>
</head>

<body>
    <div class="header">
        <?php require '../header.php' ?>
        <div class="banner"></div>
    </div>
<div class="cont">
    <?php             
        $cod = $_GET["cod"];
        $nombre=pg_fetch_array(pg_query($conexion,"select nomb_equipo from equipos where cod_equipo=$cod"));
        echo "<h1>".$nombre["nomb_equipo"]."</h1>";  
        
        $pais=pg_fetch_array(pg_query($conexion,"select nomb_pais from pais, equipos where pais.cod_pais=equipos.pais_equipo and cod_equipo=$cod"));
        echo "<h3>".$pais["nomb_pais"]."</h3>"; 

        if($cod==1){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/uad/26374/0:0,400:400-300-0-70/9af75'></p>";
        }else if($cod==2){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/jumbo-visma-tdf-2021-ok/26796/0:0,400:400-300-0-70/0c9c9'></p>";
        }else if($cod==3){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/igd/26364/0:0,400:400-300-0-70/8784e'></p>";
        }else if($cod==4){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/act/26352/0:0,400:400-300-0-70/49cc0'></p>";
        }else if($cod==5){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/ast/26355/0:0,400:400-300-0-70/d295d'></p>";
        }else if($cod==6){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/bahrain-victorious-2021-ok/26797/0:0,400:400-300-0-70/6d69c'></p>";
        }else if($cod==7){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/boh/26358/0:0,400:400-300-0-70/f122e'></p>";
        }else if($cod==8){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/cof/26359/0:0,400:400-300-0-70/de8d9'></p>";
        }else if($cod==9){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/dqt/26360/0:0,400:400-300-0-70/7b2ef'></p>";
        }else if($cod==10){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/efn/26362/0:0,400:400-300-0-70/6657e'></p>";
        }else if($cod==11){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/gfc/26363/0:0,400:400-300-0-70/83d53'></p>";
        }else if($cod==12){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/iwg/26366/0:0,400:400-300-0-70/cfe38'></p>";
        }else if($cod==13){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/isn/26365/0:0,400:400-300-0-70/1bebf'></p>";
        }else if($cod==14){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/lts/26367/0:0,400:400-300-0-70/4114c'></p>";
        }else if($cod==15){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/mov/26368/0:0,400:400-300-0-70/eba21'></p>";
        }else if($cod==16){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/bex/26357/0:0,400:400-300-0-70/f6af3'></p>";
        }else if($cod==17){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/dsm/26361/0:0,400:400-300-0-70/011a0'></p>";
        }else if($cod==18){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/tqa/26373/0:0,400:400-300-0-70/3cad3'></p>";
        }else if($cod==19){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/tfs/26371/0:0,400:400-300-0-70/41418'></p>";
        }else if($cod==20){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/ark/26354/0:0,400:400-300-0-70/0e4c1'></p>";
        }else if($cod==21){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/afc/26353/0:0,400:400-300-0-70/4605b'></p>";
        }else if($cod==22){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/tde/26370/0:0,400:400-300-0-70/22bf1'></p>";
        }else if($cod==23){
            echo "<p align='center'><img src='https://img.aso.fr/core_app/img-cycling-tdf-png/bbk/26356/0:0,400:400-300-0-70/d9840'></p>";
        }else{
            echo "<p align='center'><img src='https://www.medfordpublicschools.org/storage/2011/04/tshirt-question-mark.png'></p>";
        }

        $query="select contrato.cod_ciclista, nomb_ciclista, apellido_ciclista, nomb_pais, inicio_contrato, fin_contrato from contrato, ciclistas, pais where contrato.cod_ciclista=ciclistas.cod_ciclista and ciclistas.pais_ciclista=pais.cod_pais and cod_equipo=$cod";
        $resultado=pg_query($conexion,$query) or die ("Error");
        echo "<h2>Ciclistas miembros</h2><table align=center>
        <thead><td id=iz>Codigo</td><td>Nombre</td><td>Apellido</td><td>Pais</td><td>Inicio contrato</td><td id=der>Fin contrato</td></thead>";
        while($filas=pg_fetch_array($resultado)){
            echo "<tr><td>".$filas["cod_ciclista"]."</td>";
            echo "<td>".$filas["nomb_ciclista"]."</td>";
            echo "<td>".$filas["apellido_ciclista"]."</td>";
            echo "<td>".$filas["nomb_pais"]."</td>";
            echo "<td>".$filas["inicio_contrato"]."</td>";
            echo "<td id=izq>".$filas["fin_contrato"]."</td>";
        }echo "</table>";
    ?>
</div>
<?php require '../footer.php' ?>

</body>
</html>
