<?php
    function conectar(){
        $host="localhost";
        $usuario="root";
        $clave="";
        $bdnombre="webper";
        
        echo "Probando conectar a la BD";
        echo "<br>";
        $conn = mysqli_connect($host,$usuario,$clave,$bdnombre);
        
        if(mysqli_connect_errno()){
            echo"conexion NO establecida".mysqli_connect_error();
        }
        else{
            echo"Conexion establecida";
        }
        
        return $conn;
    }
?>


