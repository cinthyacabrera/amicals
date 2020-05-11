
<?php
require_once("conexion.php");
switch ($_GET["accion"]) {
    
    case '1':                                                                                                   //Registrar usuario

        if (isset($_POST["txt_nombre"])) {                                                                            //Comienza a asignar las variables POST
            $nombre = $_POST["txt_nombre"];
        }
        if (isset($_POST["txt_apellido"])) {
            $apellido = $_POST["txt_apellido"];
        }
        if (isset($_POST["txt_correo"])) {
            $correo = $_POST["txt_correo"];
        }
        if (isset($_POST["txt_contraseña"])) {
            $contraseña = $_POST["txt_contraseña"];
        }
        if (isset($_POST["txt_contraseña2"])) {
            $contraseña2 = $_POST["txt_contraseña2"];
        }                                                                                                       //Fin de la asignación

        if ($nombre == "" || $nombre == NULL) {                                                                       //Comienza a vericar que no sean valores nulos o vacios
            $respuesta = "Ingrese el nombre";
            echo $respuesta;
        }
        if ($apellido == "" || $apellido == NULL) {
            $respuesta = "Ingrese el apellido";
            echo $respuesta;
        }
        if ($correo == "" || $correo == NULL) {
            $respuesta = "Ingrese el correo";
            echo $respuesta;
        }
        if ($contraseña == "" || $contraseña == NULL) {
            $respuesta = "Ingrese la contraseña";
            echo $respuesta;
        } else if ($contraseña2 == "" || $contraseña2 == NULL) {
            $respuesta = "Ingrese la contraseña";
            echo $respuesta;
        }                                                                                                         
        else {
            $conexion = new Conexion();
            $sql = "INSERT INTO usuarios ( nombre, apellido, email, contrasenia) 
                    VALUES ('$nombre','$apellido','$correo','$contraseña') ;";
            $resultado = $conexion->ejecutarInstruccion($sql);
            if (!$resultado) {
                echo "No hay respuesta de la consulta";
            } else {
                echo "Registrado";
               
            }

            $conexion->cerrarConexion();
        }
        break;
        case '2':

            if (isset($_POST["correo"])) {                                                                            //Comienza a asignar las variables POST
                $correo = $_POST["correo"];
            }
            if (isset($_POST["password"])) {
                $password = $_POST["password"];
            }
            if ($correo == "" || $correo == NULL) {
                $respuesta = "Ingrese el correo";
                echo $respuesta;
            } else if ($password == "" || $password == NULL) {
                $respuesta = "Ingrese la contraseña";
                echo $respuesta;
            }
            $conexion = new conexion();
            $sql = "SELECT idUsuario, nombre, apellido FROM usuarios
                WHERE email='$correo' AND contrasenia='$password';";
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado->num_rows == 1) {
                $datos = $resultado->fetch_assoc();
                session_start();
                $_SESSION["usuario"] = $datos;
                echo json_encode(array('error' => false));
            } else {
                echo json_encode(array('error' => true));
            }
            $conexion->cerrarConexion();
            break;
}
?>