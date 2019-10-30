<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'bahco_db');

if ($_POST["eliminar"]) 
{
    foreach ($_POST["eliminar"] as $mostrar) 
    {
        echo "$mostrar";
        $sql="DELETE FROM nomenclador_categoria WHERE id_categoria=".$mostrar;

        echo mysqli_query($conexion, $sql);
    }

    header("Location: http://localhost/proyecto_bahco/production/modificar_categoria.php");
}


?>