<?php
    if($_SERVER['POST'] !== false){
        header("Location: ../actions/parametrosForm.php?error=4");
        exit();
    } else {
        $errores = '';
        if(isset($_POST['lado1'])){
            $lado1 = htmlspecialchars($_POST['lado1']);
        } else {
            if(!$errores){
                
            }
        }
    }