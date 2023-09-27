<?php

//Esto es un estandar en mvc, puede variar dependiendo el controlador

    class Vehiculos_model{
        private $db;//variable exclusica de esta clase/archivo
        private $vehiculos;

        //constructur es un metodo ,
        //siempre se va ejecutar cuando realices una instancia de la clase
        //no es necesario que llames a algun metodo o funcion
        //automaticamente se va a ejecutar este metodo
        public function __construct(){
            //db es la variable local $db
         ///llamamos a la clase que esta en database.php por lo cual usamos Conectar 
               $this->db = Conectar::conexion(); //con esto invocamos a la clase Conectar y la function conexion()
                //:: son por el metodo estatico,se usa para poder utilizar un metodo sin necesidad de instanciar la clase
               $this->vehiculos=array();//lo convertimos en un array
            require_once "models/VehiculosModel.php";
            }

            //este metodo es para poder cargar el catalogo de toda la tabla de vehiculos
            public function get_vehiculos(){
            //utilizamos un query,consultas sql
            $sql= "SELECT * FROM vehiculos";
            $resultado=$this->db->query($sql);///se trae toda informacion
                       while($row=$resultado->fetch_assoc()){ //se extrae la informacion usando un quer para extraer 
                       //todos los datos de las columnas
                            $this->vehiculos[]=$row;//va agregar toda la informacion en una fila
                            //hasta que no quede nada que mostrar de la tabla
                    
                            }
                        //retornamos(enviamos,para otra variable que lo solicite para mostrar lo guardado en vehiculos)
                        /// los datos que se agregaron anteriormente
                        return $this->vehiculos;
            
            } 
            //para vehiculos_nuevo.php//este si recibe datos
            public function insertar($placa,$marca,$modelo,$año,$color){
            $resultado=$this->db->query("INSERT INTO vehiculos(placa,marca,modelo,año,color) values ('$placa','$marca','$modelo','$año','$color')");///se trae toda informacion
            
            }
            public function modificar($id,$placa,$marca,$modelo,$año,$color){
                $resultado=$this->db->query("UPDATE  vehiculos SET placa='$placa', marca='$marca',modelo='$modelo',año='$año',color='$color' WHERE id='$id'");///se trae toda informacion

                echo  "UPDATE  vehiculos SET placa='$placa', marca='$marca',modelo='$modelo',año='$año',color='$color' WHERE id='$id'";
                }
                public function eliminar($id){
                    $resultado=$this->db->query("DELETE FROM vehiculos WHERE id='$id'");///se trae toda informacion
                    echo "DELETE FROM vehiculos WHERE id='$id'";
                    }
                    //este metodo es para poder cargar el catalogo de toda la tabla de vehiculos
                    public function get_vehiculo($id){
                        //utilizamos un query,consultas sql
                        $sql= "SELECT * FROM vehiculos where id='$id' LIMIT 1";//LIMIT PARA QUE ME MUESTRE EL PRIMERO QUE ENCUENTRE
                        $resultado=$this->db->query($sql);///se trae toda informacion
                                  $row=$resultado->fetch_assoc();
                                    
                                     
                                    //retornamos(enviamos,para otra variable que lo solicite para mostrar lo guardado en vehiculos)
                                    /// los datos que se agregaron anteriormente
                                    return $row;
                        
                        }
    }


?>