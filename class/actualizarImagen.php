<?php
require_once("conexion.php");

session_start();
$idUsuario=$_SESSION["usuario"]["idUsuario"];
$conexion = new conexion();

if($_GET["accion"]==1){
    $consulta2="SELECT urlFoto from usuarios WHERE idUsuario='$idUsuario'" ;
    if($query1=$conexion->ejecutarInstruccion($consulta2)){
        $row=$query1->fetch_array();
        echo $row["urlFoto"];
        $conexion->cerrarConexion();
    }
    else{
        echo "error en la consulta";
        $conexion->cerrarConexion();
    }

}
else if($_GET["accion"]==2){
    $timeRand = uniqid();
    $imagenArchivo=$_FILES["imagen"]["tmp_name"];
    $nombreImagen=$timeRand.$_FILES["imagen"]["name"];
    


    if(isset($imagenArchivo) && isset($nombreImagen)){
        
        
        $ruta="../images/".$nombreImagen;
        move_uploaded_file($imagenArchivo,$ruta);
        $ruta2="images/".$nombreImagen;
        $consulta1="UPDATE usuarios SET urlFoto='$ruta2' WHERE idUsuario='$idUsuario'";
        
        if($conexion->ejecutarInstruccion($consulta1)){
            $consulta2="SELECT urlFoto from usuarios WHERE idUsuario='$idUsuario'" ;
            if($query=$conexion->ejecutarInstruccion($consulta2)){
                $row=$query->fetch_array();
                echo $row["urlFoto"];
                $conexion->cerrarConexion();
            }
            else{
                
                echo"ERROR EN CONSULTA 2";
                $conexion->cerrarConexion();
            }      
    
        }
        else{
            echo"ERROR EN CONSULTA 1";
            $conexion->cerrarConexion();
        }
    
    }
    else{
        echo "ERROR EN LOS DATOS";
        $conexion->cerrarConexion();
    }
    

}
else{
    echo" ERROR EN LA ACCION";
    $conexion->cerrarConexion();
}





    






