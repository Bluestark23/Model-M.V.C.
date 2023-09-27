<?php 
    require_once "config/config.php";//lo mando llamar
    require_once "core/routes.php";//lo mando llamar
    require_once "config/database.php";//lo mando llamar
    require_once "controllers/Vehiculos.php";//controlador
//de forma estatica 
    //intancia para llamar de controlelrs/vehiculos y al index
 //   $control=new VehiculosController();
   // $control->index();
   ///aqui estoy llamando un controlador desde una vista 


    if(isset($_GET['c'])){//si no existe el controlador principal
        $controlador = cargarControlador($_GET['c']);///$_GET DEBE  SER SIEMPRE EN MAYUSCULASS
        if(isset($_GET['a'])){
            if(isset($_GET['id'])){
            cargarAccion($controlador,$_GET['a'],$_GET['id']);//l"a" es un recipiento de igualmanera la "c", tambien se envia la variable controlador
            }else{
                cargarAccion($controlador,$_GET['a']);
            }
        }else{
            cargarAccion($controlador,ACCION_PRINCIPAL);
                                                                ///checar por que no agrega a ningun nuevo vehiculo
                                                                
            }
    }else{
        ///se define el controlador y la funcion principal predefinida
        //en caso de que no exista el controlador o la funcion
        $controlador =cargarControlador(CONTROLADOR_PRINCIPAL);
        $accionTmp=ACCION_PRINCIPAL;
        $controlador->$accionTmp();
    }

?>
