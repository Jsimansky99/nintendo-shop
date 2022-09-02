  <?php
    
    // RECIBIENDO
    require 'conexion.php';
    session_start();
    $email = $_POST['user'];
    $clave = $_POST['pass'];  

    $sql = "SELECT * FROM usuario WHERE usuario='$usuario' 
    AND pass='$clave'";

    $consulta=pg_query($conexion,$sql);
    $cantidad_registros = pg_num_rows($consulta);

    if($cantidad_registros>0){
        $_SESSION['nombre_usuario']=$usuario;
        header("location: iniciar.php");
    }else{
        echo "Los datos que ha ingresado son incorrectos";
    }


    //INICIO SESSION 
    session_start();
    $usuario=$_SESSION['nombre_usuario'];
    echo "<h2> Has ingresado al sistema</h2>";


?>



