<?php
	
	// Con esta linea mostramos los posibles errores:
	//ini_set("display_errors", "on");

	// ----------------------------------------------

	function conectar_PostgreSQL( $usuario, $pass, $host, $bd )
	{
		$conexion = pg_connect( "user=".$usuario." ".
				  		   "password=".$pass." ".
						   "host=".$host." ".
						   "dbname=".$bd
						  ) or die( "Error al conectar: ".pg_last_error() );

		return $conexion;
	}

	// ----------------------------------------------

	function borrarEstudiante( $conexion, $id )
	{
		$sql = "DELETE FROM tbl_Estudiantes";

		// Si 'id' es diferente de 'null' solo se borra la Estudiante con el 'id' especificado:
		if( $id != null )
			$sql .= " WHERE id=".$id;

		// Ejecutamos la consulta (se devolvera true o false):
		return pg_query( $conexion, $sql );
	}

	// ----------------------------------------------

	function insertarEstudiante( $conexion, $id, $nombre )
	{
		$sql = "INSERT INTO tbl_Estudiantes VALUES (".$id.", '".$nombre."')";

		// Ejecutamos la consulta (se devolvera true o false):
		return pg_query( $conexion, $sql );
	}

	// ----------------------------------------------

	function modificarEstudiante( $conexion, $id, $nombre )
	{
		$sql = "UPDATE tbl_Estudiantes SET nombre='".$nombre."' WHERE id=".$id;

		// Ejecutamos la consulta (se devolvera true o false):
		return pg_query( $conexion, $sql );
	}

	// ----------------------------------------------

	function listarEstudiantes( $conexion )
	{
		$sql = "SELECT * FROM tbl_Estudiantes ORDER BY id";
		$ok = true;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Obtener el numero de filas:
			if( pg_num_rows($rs) > 0 )
			{
				echo "<p/>Vamos a mostrar el listado de las Estudiantes que hemos ingresado a la base de datos<br/>";
				echo "***********************<p />";

				// Recorrer el resource y mostrar los datos:
				while( $objFila = pg_fetch_object($rs) )
					echo $objFila->id." - ".$objFila->nombre."<br />";
			}
			else
				echo "No se encontraron Estudiantes en la base de datos<br />";
		}
		else
			$ok = false;

		return $ok;
	}

	// ----------------------------------------------

	function buscarEstudiante( $conexion, $id )
	{
		$sql = "SELECT * FROM tbl_Estudiantes WHERE id=".$id."";
		$devolver = null;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Si se encontro el registro, se obtiene un objeto en PHP con los datos de los campos:
			if( pg_num_rows($rs) > 0 )
				$devolver = pg_fetch_object( $rs, 0 );
		}

		return $devolver;
	}

	// ----------------------------------------------
	//  A PARTIR DE AQUI COMENZAMOS A REALIZAR LOS LLAMADOS A LAS FUNCIONES

	// Conectar (se detendra la ejecucion si se produce un error) - * HAY QUE SUSTITUIR LOS CAMPOS QUE VAMOS A ENVIAR A LA FUNCION *:
	
	//USUARIO, PASSWORD, IP DEL SERVIDOR, NOMBRE DE LA BD
	//$conexion = conectar_PostgreSQL( "USUARIO", "PASSWORD", "IP SERVIDOR", "NOMBRE BD" );
	$conexion = conectar_PostgreSQL( "postgres", "1234", "localhost", "x" );

	// Borrar todos los datos de la tabla:
	/* $ok = borrarEstudiante( $conexion, null );

	if( $ok == false )
		echo "Ha ocurrido un error al borrar los datos.<br/>";
	else
		echo "Los Datos han sido borrados correctamente de la base de datos.<br/>";
		echo "***************<br/>";

	// insertar una Estudiante:
	$ok = insertarEstudiante( $conexion, 1, 'Elizabeth' );

	if( $ok == false )
		echo "ha ocurrido un error al insertar los datos.<br/>";
	else
		echo "Datos insertados correctamente.<br/>";

	// insertar una Estudiante:
	$ok = insertarEstudiante( $conexion, 2, 'Ingrid Contreras' );

	// insertar una Estudiante:
	$ok = insertarEstudiante( $conexion, 3, 'Jhon Hernandez' );

	// Modificar la Estudiante numero 2:
	$ok = modificarEstudiante( $conexion, 1, "Elizabeth Guerrero" );

	if( $ok == false )
		echo "Ha ocurrido un error al modificar los datos.<br/>";
	else
		echo "Los datos han sido modificados correctamente en la bd.<br/>";

	// Modificar la Estudiante:
	$ok = listarEstudiantes( $conexion );

	if( $ok == false )
		echo "<p>Ha ocurrido un error al mostrar los datos.</p>";
	else
		echo "<p>Los Datos han sido mostrados correctamente.</p>";

	$objEstudiante = buscarEstudiante( $conexion, 3 );

	if( $objEstudiante == null )
		echo "No se encontro el Estudiante";
	else
		echo "El nombre del Estudiante con el codigo: [".$objEstudiante->id."] es [".$objEstudiante->nombre."]";

		*/

	// ----------------------------------------------

	function buscarVideojuego( $conexion, $id )
	{
		$sql = "SELECT * FROM videojuegos WHERE numero_v=".$id."";
		$devolver = null;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Si se encontro el registro, se obtiene un objeto en PHP con los datos de los campos:
			if( pg_num_rows($rs) > 0 )
				$devolver = pg_fetch_object( $rs, 0 );
		}

		return $devolver;
	}

	function buscarEstudiant( $conexion, $id )
	{
		$sql = "SELECT * FROM tbl_Estudiantes WHERE id=".$id."";
		$devolver = null;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Si se encontro el registro, se obtiene un objeto en PHP con los datos de los campos:
			if( pg_num_rows($rs) > 0 )
				$devolver = pg_fetch_object( $rs, 0 );
		}

		return $devolver;
	}

	function insertarEstudiant( $conexion, $id, $nombre )
	{
		$sql = "INSERT INTO tbl_Estudiantes VALUES (".$id.", '".$nombre."')";

		// Ejecutamos la consulta (se devolvera true o false):
		return pg_query( $conexion, $sql );
	}


?>