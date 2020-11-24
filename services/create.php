<?php
    //Abrir conexion base de datos 
    include("./utils/connection_open.php");
    
        //Datos POST procedentes del formulario   
        $name = $_POST["name"];  
        $user=$_POST['user'];
        $type='user';
        $password=$_POST['password'];
        $email=$_POST['email'];

        //Guardar datos
        $_SAVE_SQL = "INSERT INTO users (name,user,type,password,email) VALUES ('$name','$user','$type','$password','$email')"; 
        mysqli_query($conn,$_SAVE_SQL);  

    //Cerrar conexion base de datos  
    include("./utils/connection_close.php");   
 ?>