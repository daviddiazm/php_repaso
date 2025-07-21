<?php

include __DIR__ . "/../model/conection.php";

$messge = "";

if(isset($_POST["btnRegistrar"])) {
    if(!empty($_POST["email"]) && !empty($_POST["name"]) && !empty($_POST["celphone"])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $celphone = $_POST["celphone"];
        $query = "INSERT INTO usuarios(email, name, celphone) VALUES ( '$email', '$name', '$celphone' )";
        $sql = $conection->query($query);
        if($sql=1) {
            $messge = "se guardo con exito ";
            // echo 
            // "<script>
            //     alert('ususario guardado exitosamente')
            //     window.location = '../index.php'
            // </script>";
        } else {
            // echo "<p>ocurrio un</p>";
            $messge = "ocurrio un error";
        }
    } else {
        echo "<h2> Falta ingresar algun campo </h2>";
    }
}

?>
