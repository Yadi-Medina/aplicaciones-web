<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta ....</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    //definimos variables

    //rescatamos valores del formulario
        $nombre=$_POST['name'];
        $correo=$_POST['email'];
        $telefono=$_POST['Telefono'];
        $genero=$_POST['genero'];
        $usuario=$_POST['user'];
        $contrasenia=$_POST['password'];
        $compassword=$_POST['compassword'];
    //verficaamos que las credenciales coincidan
        if($compassword==$contrasenia){
            $respuesta="Correcto";
        }else{
            $respuesta="Incorrecto";
        }
    ?>

    <h1>Respuesta...</h1>
    <h2>Hola : <?php echo($usuario) ?> </h2>
    <h2>Tu logueo fue : <?= $respuesta ?> </h2>
    <h1>Datos</h1>
    <table>
        <tr>
            <td>Campo</td>
            <td>Registro</td>
        </tr>
        <tr>
            <td>Nombre completo</td>
            <td><?php echo($nombre); ?></td>
        </tr>
        <tr>
            <td>Correo</td>
            <td><?php echo($correo); ?></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><?php echo($telefono); ?></td>
        </tr>
        <tr>
            <td>Sexo</td>
            <td><?php echo($genero); ?></td>
        </tr>
        <tr>
            <td>Usuario</td>
            <td><?php echo($usuario); ?></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><?php echo($contrasenia); ?></td>
        </tr>
    </table>
    <script src="../js/inicio.js"></script>

</body>
</html>