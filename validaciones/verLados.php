<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        header("Location: ../actions/parametrosForm.php?error=4");
        exit();
    } else {
        $errores = '';
        require_once './funciones.php';
        if($_SESSION['figura'] == 'triangulo'){
            $lado1T = htmlspecialchars($_POST['lado1']);
            $lado2T = htmlspecialchars($_POST['lado2']);
            $lado3T = htmlspecialchars($_POST['lado3']);
            if(validaCampo($lado1T)){
                $errores .= ($errores === '') ? '?unoVacio=true' : '&unoVacio=true';
            } else if($lado1T <= 0){
                $errores .= ($errores === '') ? '?unoMal=true' : '&unoMal=true';
            }
            if(validaCampo($lado2T)){
                $errores .= ($errores === '') ? '?dosVacio=true' : '&dosVacio=true';
            } else if($lado2T <= 0){
                $errores .= ($errores === '') ? '?dosMal=true' : '&dosMal=true';
            }
            if(validaCampo($lado3T)){
                $errores .= ($errores === '') ? '?tresVacio=true' : '&tresVacio=true';
            } else if($lado3T <= 0){
                $errores .= ($errores === '') ? '?tresMal=true' : '&tresMal=true';
            }
            if($errores !== ''){
                $datosRecibidos = array(
                    'lado1' => $lado1T,
                    'lado2' => $lado2T,
                    'lado3' => $lado3T
                );
                $datosDevolver = http_build_query($datosRecibidos);
                header("Location: ../actions/parametrosForm.php" . $errores . "&error=4&" . $datosDevolver);
                exit();
            } else {
                $_SESSION['lado1T'] = $lado1T;
                $_SESSION['lado2T'] = $lado2T;
                $_SESSION['lado3T'] = $lado3T;
                $_SESSION['success2'] = true;
                header('Location: ../actions/resultados.php');
                exit();
            }
        } else if($_SESSION['figura'] == 'rectangulo'){
            $lado1R = htmlspecialchars($_POST['lado1']);
            $lado2R = htmlspecialchars($_POST['lado2']);
            if(validaCampo($lado1R)){
                $errores .= ($errores === '') ? '?unoVacio=true' : '&unoVacio=true';
            } else if($lado1R <= 0){
                $errores .= ($errores === '') ? '?unoMal=true' : '&unoMal=true';
            }
            if(validaCampo($lado2R)){
                $errores .= ($errores === '') ? '?dosVacio=true' : '&dosVacio=true';
            } else if($lado2R <= 0){
                $errores .= ($errores === '') ? '?dosMal=true' : '&dosMal=true';
            }
            if($errores !== ''){
                $datosRecibidos = array(
                    'lado1' => $lado1R,
                    'lado2' => $lado2R
                );
                $datosDevolver = http_build_query($datosRecibidos);
                header("Location: ../actions/parametrosForm.php" . $errores . "&error=4&" . $datosDevolver);
                exit();
            } else {
                $_SESSION['lado1R'] = $lado1R;
                $_SESSION['lado2R'] = $lado2R;
                $_SESSION['success2'] = true;
                header('Location: ../actions/resultados.php');
                exit();
            }
        } else if($_SESSION['figura'] == 'cuadrado'){
            $lado1C = htmlspecialchars($_POST['lado1']);
            if(validaCampo($lado1C)){
                $errores .= ($errores === '') ? '?unoVacio=true' : '&unoVacio=true';
            } else if($lado1C <= 0){
                $errores .= ($errores === '') ? '?unoMal=true' : '&unoMal=true';
            }
            if($errores !== ''){
                $datosRecibidos = array('lado1' => $lado1C);
                $datosDevolver = http_build_query($datosRecibidos);
                header("Location: ../actions/parametrosForm.php" . $errores . "&error=4&" . $datosDevolver);
                exit();
            } else {
                $_SESSION['lado1C'] = $lado1C;
                $_SESSION['success2'] = true;
                header('Location: ../actions/resultados.php');
                exit();
            }
        } else if($_SESSION['figura'] == 'circulo'){
            $radioC = htmlspecialchars($_POST['lado1']);
            if(validaCampo($radioC)){
                $errores .= ($errores === '') ? '?unoVacio=true' : '&unoVacio=true';
            } else if($radioC <= 0){
                $errores .= ($errores === '') ? '?unoMal=true' : '&unoMal=true';
            }
            if($errores !== ''){
                $datosRecibidos = array('radio' => $radioC);
                $datosDevolver = http_build_query($datosRecibidos);
                header("Location: ../actions/parametrosForm.php" . $errores . "&error=4&" . $datosDevolver);
                exit();
            } else {
                $_SESSION['radioC'] = $radioC;
                $_SESSION['success2'] = true;
                header('Location: ../actions/resultados.php');
                exit();
            }
        }
    }
