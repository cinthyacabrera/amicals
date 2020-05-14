
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
            $sql = "INSERT INTO usuarios ( nombre, apellido, email, contrasenia, urlFoto) 
                    VALUES ('$nombre','$apellido','$correo','$contraseña', 'images/fotoperfil.png') ;";
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
            $sql = "SELECT idUsuario, nombre, apellido, email, contrasenia ,urlFoto, tu.tipo FROM usuarios u
                INNER JOIN tipousuario tu ON tu.idtipousuario=u.idtipousuario
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
            case '3':                                                                                                   //Actualizar datos
                if(isset($_POST["txt_nombre"])){                                                                            //Comienza a asignar las variables POST
                    $nombre = $_POST["txt_nombre"];
                }
                if(isset($_POST["txt_apellido"])){
                    $apellido = $_POST["txt_apellido"];
                }
                if(isset($_POST["txt_correo"])){
                    $correo = $_POST["txt_correo"];
                }
                if(isset($_POST["txt_contra"])){
                    $contra = $_POST["txt_contra"];
                }
                if(isset($_POST["txt_contra2"])){
                    $contra2 = $_POST["txt_contra2"];
                }
                if($nombre=="" || $nombre==NULL){                                                                       //Comienza a vericar que no sean valores nulos o vacios
                    $respuesta="Ingrese el nombre";
                    echo $respuesta;
                }
                if($apellido=="" || $apellido==NULL){
                    $respuesta="Ingrese el apellido";
                    echo $respuesta;
                }
                if($correo=="" || $correo==NULL){
                    $respuesta="Ingrese el correo";
                    echo $respuesta;
                }
                if($contra=="" || $contra==NULL){
                    $respuesta="Ingrese la contaseña";
                    echo $respuesta;
                }
                if($contra2=="" || $contra2==NULL){
                    $respuesta="Ingrese la contraseña 2";
                    echo $respuesta;
                }
                                                                                                                       //Fin de validación
                else{
                    if ($contra==$contra2) {
                        session_start();
                        $idUsuario = $_SESSION["usuario"]["idUsuario"];
                        $conexion = new conexion();
                        $sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',email='$correo',contrasenia='$contra' 
                        where idUsuario=$idUsuario";
                        $resultado = $conexion->ejecutarInstruccion($sql);
                        if (!$resultado) {
                            echo "No hay respuesta de la consulta";
                        } else {
                            echo "Actualizado";
                            $sql = "SELECT idUsuario, nombre, apellido, email, contrasenia , urlFoto, tu.tipo FROM usuarios u
                            INNER JOIN tipousuario tu ON tu.idtipousuario=u.idtipousuario
                            WHERE email='$correo' AND contrasenia='$password';";
                            $resultado=$conexion->ejecutarInstruccion($sql);
                            if($resultado->num_rows==1){
                                $datos=$resultado->fetch_assoc();
                                $_SESSION["usuario"] = $datos;
                            }
                            else{
                            }
                        }
                        $conexion->cerrarConexion();
                    }
                    else {
                        $respuesta="Las contraseñas deben ser iguales";
                        echo $respuesta;
                    }
                    
                }                                              
            break;
            case '4':                                                                                                 

                if (isset($_POST["txt_descripcion"])) {                                                                         
                    $texto = $_POST["txt_descripcion"];
                }
                                                                                          
        
                if ($texto == "" || $texto == NULL) {                                                                     
                    $respuesta = "Ingrese el comentario";
                    echo $respuesta;
                }
                                                                                             
                else {
                    session_start();
                    $idUsuario = $_SESSION["usuario"]["idUsuario"];
                    $conexion = new Conexion();
                    $sql = "INSERT INTO comentarios ( descripcion, idUsuario ) 
                            VALUES ('$texto','$idUsuario' );";
                    $resultado = $conexion->ejecutarInstruccion($sql);
                    if (!$resultado) {
                        echo "No hay respuesta de la consulta";
                    } else {
                        echo "Comentario Registrado";

                                              
                    }
        
                    $conexion->cerrarConexion();
                }
                break;
                case '5':
                    $conexion = new Conexion();
                    $sql1="SELECT descripcion, u.urlFoto, u.nombre, u.apellido FROM comentarios c
                        INNER JOIN usuarios u ON u.idUsuario=c.idUsuario
                         ";
                         
                         if ($respuesta2 = $conexion->ejecutarInstruccion($sql1)) {
                            $comentarios = array();
                            if ($respuesta2->num_rows != 0) {
                                while ($row2 = $conexion->obtenerFila($respuesta2)) {
                                    $comentarios[] = array("comentario" => $row2["descripcion"], "nombre" => $row2["nombre"] , 
                                    "apellido" => $row2["apellido"], "urlFoto" => $row2["urlFoto"]);
                                }
                                echo json_encode(array("comentarios" => $comentarios));
                            } else {
                                echo json_encode(array("comentarios" => array("error" => true, "mensaje" => "No hay comentarios todavia")));
                            }
                        } else {
                            echo "error en consulta de comentarios";
                        }

                break;
                case '6':
                    $conexion = new Conexion();
                    $sql1="SELECT idUsuario, nombre, apellido, email, contrasenia , urlFoto FROM usuarios u
                         ";
                         
                         if ($respuesta2 = $conexion->ejecutarInstruccion($sql1)) {
                            $usuarios = array();
                            if ($respuesta2->num_rows != 0) {
                                while ($row2 = $conexion->obtenerFila($respuesta2)) {
                                    $usuarios[] = array("idUsuario" => $row2["idUsuario"], "nombre" => $row2["nombre"] , 
                                    "apellido" => $row2["apellido"], "urlFoto" => $row2["urlFoto"], "email" => $row2["email"]);
                                }
                                echo json_encode(array("usuarios" => $usuarios));
                            } else {
                                echo json_encode(array("usuarios" => array("error" => true, "mensaje" => "No hay usuarios todavia")));
                            }
                        } else {
                            echo "error en consulta de comentarios";
                        }

                break;
}
?>