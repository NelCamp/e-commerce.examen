<?php

    include 'conexion_be.php';

    /*Se crea las variables para almacenarlas*/ 
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    /*Se inserta query para almacenar en la base de datos los datos ingresados*/ 
    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena)
        VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

        $ejecutar = mysqli_query($conexion,$query);


    if($ejecutar){
        echo '
            <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../login.php";
            </script>   
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevvo, usuario no almacenado");
            window.location = "../login.php";
            </script> 
            ';
    }

    /*Cerramos la conexion a la base de datos */
    mysqli_close($conexion);
?>