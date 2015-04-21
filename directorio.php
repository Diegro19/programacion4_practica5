<?php
require_once('contacto.php');
require_once('listarContactos.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    <title>Ejemplo de PHP y MySQL</title>
    <meta charset="UTF-8"> 
    </head>
    
	
        <td><h1>Mostrar los elementos</h1></td>
        <?php
	
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
	
	
        ?>
	<head>
	<h1>Agregar nuevo elemento y mostrar los elementos</h1>
        <?php
            $modelo->nuevo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
	</head>


        <h1>Editar el ultimo elemento y mostrar los elementos</h1>
        <?php
            $modelo->editarUltimo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>


        <h1>Eliminar el ultimo elemento y mostrar los elementos</h1>
        <?php
            $modelo->eliminarUltimo();
            $contactos = $modelo->encontrarTodos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>

    </body>
</html>

