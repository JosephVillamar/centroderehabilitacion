<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Editar Datos del Paciente</title>
</head>
<body>
    <!-- Creamos un menu -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="paciente.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Editar Paciente</h2>
    <hr>

    <?php
        // Obtenemos el ID del paciente a editar desde la URL
        $id_paciente = $_GET['id'];

        // Conectamos a la base de datos y obtenemos los datos del paciente
        include("config.php");
        $sql = "SELECT * FROM tb_paciente WHERE id_paciente = $id_paciente";
        $resultado = mysqli_query($mysqli, $sql);
        $paciente = mysqli_fetch_assoc($resultado);
    ?>

    <!-- Creo un formulario para editar los datos -->
    <form action="actualizar_paciente.php" method="POST">
        <div class="container">
            <input type="hidden" name="id_paciente" value="<?php echo $paciente['id_paciente']; ?>">
            <input type="text" name="descripcion" value="<?php echo $paciente['descripcion']; ?>" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Actualizar</button>
            </div>
        </div>
    </form>
</body>
</html>