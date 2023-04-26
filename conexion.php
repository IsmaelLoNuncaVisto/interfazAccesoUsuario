<?php

class Conexion{
    
    private $connection;

 public function __construct()
 {
    
 }

 public function establecerConexion(){
    $host="localhost";
    $dbname="ismael";
    $username="ismael";
    $password="ismael";

    try{
        $this->connection=mysqli_connect($host,$username,$password,$dbname);
        if (mysqli_connect_errno()) {
            echo "Fallo al conectar con al abase de datos";
            exit();

        }else{
            header("Location: http://localhost:3000/index.php");
       exit;
        }
    }catch(PDOException $e){
       
    }
 }

}

?>