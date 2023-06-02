<?php

    include 'conexion_be.php'; 

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    /*se valida el usuario contraseña mediante (validar_login)*/
    /*Selecciona la tabla usuarios, si correo = correo y coincide con la base de datos */
    $validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and
    contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../index.html");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.html";
        </script>
        ';
        exit;}
?>