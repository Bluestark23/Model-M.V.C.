<?php ///es como una clase padre en java

        class VehiculosController{
            //mostramos la vista principal
            public function __construct(){
            require_once "models/VehiculosModel.php"; //para agregar un script y evitar agregar lo varias veces 

        }
            public function index(){
//se comienza a interactuar entre el modelo y la vista(view)
            require_once "models/VehiculosModel.php"; //para agregar un script y evitar agregar lo varias veces 
            $vehiculos =new Vehiculos_Model();///tomo los datos del archivo Vehiculos_Model o sea una instancia
            //data["//aqui es un indice para que lo identifique la vista"]
            $data["titulo"] ="Vehiculos";
            $data["vehiculos"] =$vehiculos->get_vehiculos();///llamo  para mostrar los datos de la  funcion get_vehiiculos de vehiculosModel.php
                
            //cargo la vista que es el archivo con html
            require_once "views/vehiculos/vehiculos.php";
        }
            //funcion para vehiculos_nuevo
            public function nuevo(){
                $data["titulo"]="Vehiculos";
                 //cargo la vista que es el archivo con html
               require_once "views/vehiculos/vehiculos_nuevo.php";
               
            } 

            public function guarda(){
                $placa=$_POST['placa'];
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $año=$_POST['año'];
                $color=$_POST['color'];
                $vehiculos=new Vehiculos_model();
                $vehiculos->insertar($placa,$marca,$modelo,$año,$color); //la mando llamar de VehiculosModel
                $data["titulo"]="Vehiculos";
                $this->index(); 
                
                } 
           public function modificar($id){
           $vehiculos=new Vehiculos_model();   

            
            $data["id"]=$id;
            $data["vehiculos"]=$vehiculos->get_vehiculo($id);//creo que se almacena todo como si fuera un array o eso creo? ///$data["vehiculos"]["placa"]
            $data["titulo"]="Vehiculos";

              //cargo la vista que es el archivo con html
              require_once "views/vehiculos/vehiculos_modifica.php";
                 
            } 
            public function actualizar(){
                $id=$_POST['id'];
                $placa=$_POST['placa'];
                $marca=$_POST['marca'];
                $modelo=$_POST['modelo'];
                $año=$_POST['año'];
                $color=$_POST['color'];

                
                   $vehiculos=new Vehiculos_model();
                   $vehiculos->modificar($id,$placa,$marca,$modelo,$año,$color); //la mando llamar de VehiculosModel
                   $data["titulo"]="Vehiculos";
                   $this->index(); 
                   
                   }

                   
            public function eliminar($id){
                
                $vehiculos=new Vehiculos_model();
                $vehiculos->eliminar($id); //la mando llamar de VehiculosModel
                $data["titulo"]="Vehiculos";
                $this->index(); 
                
                } 

    }


?>