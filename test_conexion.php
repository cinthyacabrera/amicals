<?php	
	
	include_once("conexion.php");
	$conexion = new Conexion();	

    $resultado = $conexion->ejecutarInstruccion(/// consulta para probar si la base de datos funciona
        'SELECT id_usuario, concat (Nombres, Apellidos, Correo_electronico, contra) FROM usuario');
	
		echo '<table border="1px">';///imprime una tabla con los datos de id de persona y nombre de la persona
	while($fila = $conexion->obtenerFila($resultado)){
        echo "<tr>";
		echo "<td>". $fila["id_usuario"]. "</td>"; 
        echo "<td>". $fila["Nombres"]. "</td>";    
       
  
		echo "</tr>";
	}
    echo "</table>";
    
	$conexion->liberarResultado($resultado);
	$conexion->cerrarConexion();

?>