<?php


?>
<!DOCTYPE html>
<html>
    <head>
            <title><?php  echo $data["titulo"]; ///imprimo lo que hay en el arreglo data["titulo"]?></title>
    </head>

        <body>
            <h2><?php echo $data["titulo"]?></h2>
      
           <form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off" >
           <input type="hidden" id="id" name="id" value="<?php  echo $data["id"];?>"/>
           Placa: <input type="text" id="placa" name="placa"  value="<?php  echo $data["vehiculos"]["placa"];?>"/><br/>
           Marca: <input type="text" id="marca" name="marca"  value="<?php  echo $data["vehiculos"]["marca"];?>" /><br/>
           Modelo: <input type="text" id="modelo" name="modelo"  value="<?php  echo $data["vehiculos"]["modelo"];?>"/><br/>
           Año: <input type="text" id="año" name="año"  value="<?php  echo $data["vehiculos"]["año"];?>"/><br/>
           Color: <input type="text" id="color" name="color"   value="<?php  echo $data["vehiculos"]["color"];?>"/><br/>
                <button id="guardar" name="guardar" type="submit" >Guardar</button>
           </form>

            </table>
   
        </body> 
    



</html>
