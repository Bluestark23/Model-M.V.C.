<?php


?>
<!DOCTYPE html>
<html>
    <head>
            <title><?php  echo $data["titulo"]; ///imprimo lo que hay en el arreglo data["titulo"]?></title>
    </head>

        <body>
            <h2><?php echo $data["titulo"]?></h2>
      
           <a href="index.php?c=vehiculos&a=nuevo">Agregar</a> <!--es un boton-->
            <br />
            <br />
                    <!--no esta mal la palabra border-->
            <table border="1" width="80%">
                <thead><!--cabecera-->
                        <tr>
                            <th>Placas</th><!--para las columnas-->
                            <th>Marca</th><!--para las columnas-->
                            <th>Modelo</th><!--para las columnas-->
                            <th>Año</th><!--para las columnas-->
                            <th>Color</th><!--para las columnas-->
                            <th>Editar</th><!--para las columnas-->
                            <th>Eliminar</th><!--para las columnas--
                        </tr><!--filas-->
                 </thead> 
                    <tbody>
                            <?php foreach($data["vehiculos"] as $dato ){//se le cambia el nombre de data a dato
                                    echo "<tr>";//abro la fila
                                    echo  "<td>".$dato["placa"]."</td>";
                                    echo  "<td>".$dato["marca"]."</td>";
                                    echo  "<td>".$dato["modelo"]."</td>";
                                    echo  "<td>".$dato["año"]."</td>";
                                    echo  "<td>".$dato["color"]."</td>";
                                    echo  "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
                                    echo  "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
                                    echo "</tr>";

                            } ?>
                    </tbody>

            </table>
   
        </body> 
    



</html>
