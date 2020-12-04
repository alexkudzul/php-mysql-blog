<?php

if(isset($_POST)){
    // Conexion a la base de datos
    require_once 'includes/conexion.php';

    /*  mysqli_real_escape_string,  scape, no lo interpreta como parte del lenguaje, se enfoca en el INSERT "''" 
        Lo que entré sera como string, esto evitando usar las comillas simples o dobles y que la bd devuelva un error 
        Implementado el scape ya se podra ingresar comillas simples y dobles
    */

    // Obtener los datos del form
    $name = isset($_POST['name']) ? mysqli_real_escape_string($conexion, $_POST['name']) : false;

    
    // Array de errores
    $errors = array();

    // Validar los datos del form
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)){
        $name_validate = true;
    }else{
        $name_validate = false;
        $errors['name'] = "El nombre no es valido";
    }
    // Si no hay errores, ejecutar la consulta
    if(count($errors) == 0){
        $sql = "INSERT INTO categories VALUES (NULL, '$name');";
        $save = mysqli_query($conexion, $sql);

        // var_dump($save);
        // die();
    }
}

header('Location: index.php');

?>