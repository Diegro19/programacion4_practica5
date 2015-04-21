<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
             echo '<tr>';
                echo '<td>ID</th>';
                echo '<td>Apellido Paterno</td>';
                echo '<td>Apellido Materno</td>';
                echo '<td>Nombre</td>';
                echo '<td>Domicilio</td>';
                echo '<td>Colonia</td>';
                echo '<td>C&oacute;digo Postal</td>';
                echo '<td>Municipio</td>';
                echo '<td>Estado</td>';
                echo '<td>Pa&iacute;s</td>';
                echo '<td>Mapa</td>';
                echo '<td>Tel&eacute;fono</td>';
                echo '<td>Celular</td>';
                echo '<td>Radio</td>';
                echo '<td>Email</td>';
                echo '<td>Observaciones</td>';
                echo '<td>saved_at</td>';
                echo '<td>modified_in</td>';
            echo '</tr>';
            foreach($this->contactos as $contacto){
		echo "<table>";
                echo "<tr>";
                    echo '<tr><td>'.$contacto['id']. '</tr></td>';
                    echo '<tr><td>'.$contacto['ap'].'</tr></td>';
                    echo '<tr><td>'.$contacto['am'].'</tr></td>';
                    echo '<tr><td>'.$contacto['nombre'].'</tr></td>';
                    echo '<tr><td>'.$contacto['domicilio'].'</tr></td>';
                    echo '<tr><td>'.$contacto['colonia'].'</tr></td>';
                    echo '<tr><td>'.$contacto['cp'].'</tr></td>';
                    echo '<tr><td>'.$contacto['municipio'].'</tr></td>';
                    echo '<tr><td>'.$contacto['estado'].'</tr></td>';
                    echo '<tr><td>'.$contacto['pais'].'</tr></td>';
                    echo '<tr><td>'.$contacto['mapa'].'</tr></td>';
                    echo '<tr><td>'.$contacto['telefono'].'</tr></td>';
                    echo '<tr><td>'.$contacto['celular'].'</tr></td>';
                    echo '<tr><td>'.$contacto['radio'].'</tr></td>';
                    echo '<tr><td>'.$contacto['email'].'</tr></td>';
                    echo '<tr><td>'.$contacto['observaciones'].'</tr></td>';
                    echo '<tr><td>'.$contacto['saved_at'].'</tr></td>';
                    echo '<tr><td>'.$contacto['modified_in'].'</tr></td>';
                echo '</tr>';
		echo '</table>';
            }
        echo "</table>";
    }
}

?>
