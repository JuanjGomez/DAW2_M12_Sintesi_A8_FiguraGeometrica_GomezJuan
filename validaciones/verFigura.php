<?php
    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        header("Location: ../index.php?error=1");
    } else {
        $errores = '';
        if(isset($_POST['figura'])){
            $figura = htmlspecialchars($_POST['figura']);
        } else {
            if(!$errores){
                $errores .= '?selectVacio=true';
            } else {
                $errores .= '&selectVacio=true';
            }
        }
        if($errores !== ''){
            $datosRecibidos = array(
                'figura' => $figura
            );
            $datosDevolver = http_build_query($datosRecibidos);
            if(strpos($errores, $datosDevolver) !== false){
                header("Location: ../index.php" . $errores . "&error=2" . $datosDevolver);
            } else {
                header("Location: ../index.php?" . $errores . "&error=2" . $datosDevolver);
            }
            exit();
        } else {
            session_start();
            $_SESSION['figura'] = $figura;
            $_SESSION['success1'] = true;
            header("Location: ../actions/parametrosForm.php");
            exit();
        }

    }