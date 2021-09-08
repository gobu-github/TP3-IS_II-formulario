<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro exitoso</title>
</head>
<body>
    <section class="registroExitoso">
        
        <?php
        $nombre = $_POST['nombre'];
        $apellido = $_POST["apellido"];
        $correo = $_POST["email"];
        $contraseña = $_POST["password"];
        $edad = $_POST['edad'];

        echo "Hola, $nombre $apellido, de $edad años de edad, tu correo es $correo, estas registrad@";
        ?>

        <br>
        <br>
        <p>Leiste la sección términos y condiciones?</p>
        <div class="pregunta">
        <a href="index.html"><button class="btn">Si</button></a>
        <a href="index.html"><button class="btn">No</button></a>
        </div>
    
    </section>
    
</body>
</html>









