<?php
include("config.php");

// Habilitar la visualización de errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Obtenemos los datos del formulario
$id_paciente = $_POST['id_paciente'];
$nueva_descripcion = $_POST['nueva_descripcion'];

// Escapamos los datos para prevenir inyección SQL
$id_paciente = mysqli_real_escape_string($mysqli, $id_paciente);
$nueva_descripcion = mysqli_real_escape_string($mysqli, $nueva_descripcion);

// Actualizamos el registro en la base de datos
$sql = "UPDATE tb_paciente SET descripcion = '$nueva_descripcion' WHERE id_paciente = '$id_paciente'";

if (mysqli_query($mysqli, $sql)) {
    // Redirigimos al usuario a la lista de pacientes
    header("Location: paciente.php");
} else {
    echo "Error al actualizar el paciente: " . mysqli_error($mysqli);
}
?>
