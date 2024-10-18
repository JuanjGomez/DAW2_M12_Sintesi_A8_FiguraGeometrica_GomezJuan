<?php
    session_start();
    if($_SERVER['POST'] !== false){
        header("Location: ../actions/parametrosForm.php?error=4");
        exit();
    } else {
        $errores = '';
        require_once '../funciones/funciones.php';
        if($_SESSION['figura'] == 'triangulo'){
            $lado1T = htmlspecialchars($_POST['lado1']);
            $lado2T = htmlspecialchars($_POST['lado2']);
            $lado3T = htmlspecialchars($_POST['lado3']);
            if(validaCampo($lado1T)){
                if(!$errores){
                    $errores.= '?unoMal=true';
                } else {
                    $errores.= '&unoMal=true';
                }
            }
            if(validaCampo($lado2T)){
                if(!$errores){
                    $errores.= '?dosMal=true';
                } else {
                    $errores.= '&dosMal=true';
                }
            }
            if(validaCampo($lado3T)){
                if(!$errores){
                    $errores.= '?tresMal=true';
                } else {
                    $errores.= '&tresMal=true';
                }
            }
        } else if($_SESSION['figura'] == 'rectangulo'){
            $lado1R = htmlspecialchars($_POST['lado1']);
            $lado2R = htmlspecialchars($_POST['lado2']);
            if(validaCampo($lado1R)){
                if(!$errores){
                    $errores.= '?unoMal=true';
                } else {
                    $errores.= '&unoMal=true';
                }
            }
            if(validaCampo($lado2R)){
                if(!$errores){
                    $errores.= '?dosMal=true';
                } else {
                    $errores.= '&dosMal=true';
                }
            }
        } else if($_SESSION['figura'] == 'cuadrado'){
            $lado1C = htmlspecialchars($_POST['lado1']);
            if(validaCampo($lado1C)){
                if(!$errores){
                    $errores.= '?unoMal=true';
                } else {
                    $errores.= '&unoMal=true';
                }
            }
        } else if($_SESSION['figura'] == 'circulo'){
            $radioC = htmlspecialchars($_POST['lado1']);
            if(validaCampo($radioC)){
                if(!$errores){
                    $errores.= '?unoMal=true';
                } else {
                    $errores.= '&unoMal=true';
                }
            }
        }
    }