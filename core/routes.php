<?php
//para verificar las acciones de los controladores
        function cargarControlador($controlador){//recibo la variable controlador
                                //ucwords me agrega la primera letra en mayusculas
            $nombreControlador=ucwords($controlador)."Controller";//esta contatenado
            //aqui recibe todos los archivos que incluyan en nombre Controller
            $archivoControlador='controllers/'.ucwords($controlador).'.php';
            //validacion de que si no existe la clase
            //cargue el controlador por default
            if(!is_file($archivoControlador)){
                ///ESTO LLEGA DESDE EL INDEX con config/config.php "controlador_principal" que es un controlador
                    $archivoControlador='controllers/'.CONTROLADOR_PRINCIPAL.'.php';
            } //agrego el controlador 
           echo $nombreControlador;
            require_once $archivoControlador;
            $control=new $nombreControlador();//intancia que carga el nombre del controlador como si fuera esto $vehiculos =new Vehiculos_Model();
            //returnamos el control
            return $control;
            
        }

            ///para la accion, si no existe id marcalo como null
            function cargarAccion($controller,$accion,$id=null){
                //validacion    
                if(isset($accion) && method_exists($controller,$accion)){
                        ///carrgo la accion es similar a $data["vehiculos"] =$vehiculos->get_vehiculos();
                        //pero con variables
                        if($id==null){//se envia de forma normal
                        $controller->$accion();
                            }else{
                                //perso si no se agrega el $id
                                  $controller->$accion($id);

                            }
                }else{//si no existe 
                    $controller->ACCION_PRINCIPAL();//Puede suceder un error

                }
            }
                                    ///minuto 1:54:39;checar esta parte
?>