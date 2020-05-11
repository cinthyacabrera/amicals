<?php	
	
	include_once("conexion.php");
	$conexion = new Conexion();	

    $resultado = $conexion->ejecutarInstruccion(/// consulta para probar si la base de datos funciona
        'SELECT idUsuario, concat (nombre, apellido, email, contrasenia) as datos FROM usuarios');
	
		echo '<table border="1px">';///imprime una tabla con los datos de id de persona y nombre de la persona
	while($fila = $conexion->obtenerFila($resultado)){
        echo "<tr>";
		echo "<td>". $fila["idUsuario"]. "</td>"; 
        echo "<td>". $fila["datos"]. "</td>";    
       
  
		echo "</tr>";
	}
    echo "</table>";
    
	$conexion->liberarResultado($resultado);
	$conexion->cerrarConexion();

?>