<?php


?>
<!DOCTYPE html>
<html>
    <head>
            <title><?php  echo $data["titulo"]; ///imprimo lo que hay en el arreglo data["titulo"]?></title>
    </head>

        <body>
            <h2><?php echo $data["titulo"]?></h2>
      
           <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off" >
           Placa: <input type="text" id="placa" name="placa" /><br/>
           Marca: <input type="text" id="marca" name="marca" /><br/>
           Modelo: <input type="text" id="modelo" name="modelo" /><br/>
           Año: <input type="text" id="año" name="año" /><br/>
           Color: <input type="text" id="color" name="color" /><br/>
                <button id="guardar" name="guardar" type="submit" >Guardar</button>
           </form>

            </table>
   
        </body> 
    



</html>
