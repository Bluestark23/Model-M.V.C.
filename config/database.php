<?php 
///es una classe con la que conecto a mysql

    class Conectar{
        //es un metodo que no recibe nada por eso se queda vacio los ()
        public static function conexion(){
            //estancio de la funcion mysqli
            $conexion=new mysqli("localhost","root","rioverde4","mvc");
            return $conexion;//envio la variable $conexion a mysql
        }


    }


?>