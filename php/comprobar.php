<?php
    require_once 'cxn.php';
    $cxn = ConectionBD::getConection();

    // VARIABLES
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $celular = $_POST['celular'];

    $sqlinsert = "INSERT INTO `scritus`(`id`, `nombre`, `apellido`, `correo`, `contraseña`, `celular`) VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$celular')";

    $cxn -> query($sqlinsert);

    echo("Datos guardados exitosamente");
?>