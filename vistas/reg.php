<?php
    //conexion con la base de datos
    $servername = "localhost";
    $database = "id7622858_criptoapp";
    $username = "id7622858_raulleandro";
    $password = "totti0504@";
    // Create connection
    $conexion = mysqli_connect($servername, $username, $password, $database) or die ("No se ha podido conectar al servidor de Base de datos");
    $db = mysqli_select_db( $conexion, $database )or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );;


    //guarda los datos del formulario
    $nombre = $_POST['nombreu'];
    $apellido = $_POST['apellidou'];
    $email = $_POST['emailu'];
    $password = $_POST['passwordu'];
    $pass = md5($password);
    //inserta datos en la en la tabla usuario (SIN VALIDAR)
    $query = "INSERT INTO usuario VALUES ('$nombre','$apellido','$email','$pass')";
    //envia a la base de datos
    mysqli_query($conexion, $query) or die ("<h2>error al enviar datos a la bs</h2>"); 

    //confirmacion
    echo '<h2>se lograron enviar los datos</h2>';

    mysqli_close($conexion);
?>