<?php
include("config.php");

// Obtener la lista de pacientes
$sql = "SELECT * FROM tb_paciente";
$result = mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Pacientes</title>
</head>

<body>
    <!-- Creamos un menu -->
    <div class="icon-bar">
        <a href="registro.php"><i class="fa fa-registered"></i></a>
        <a href="inicio.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <h2>Pacientes</h2>
    <hr>
    <div class="container">
        <!-- Creo la tabla para presentar los pacientes -->
        <table border='1'>
            <tr>
                <th>Código</th>  
                <th>Nombre</th>    
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_paciente'] . "</td>";
                echo "<td>" . $row['descripcion'] . "</td>";
                echo "<td><a href='editar_paciente.php?id=" . $row['id_paciente'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='delete.php?id=" . $row['id_paciente'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>