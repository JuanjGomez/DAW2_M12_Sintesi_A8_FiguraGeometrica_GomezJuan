<?php
    session_start();
    if(!isset($_SESSION["figura"])){
        header("Location:../index.php?error=3");
        exit();
    }
    require_once '../classes/Triangulo.php';
    require_once '../classes/Rectangulo.php';
    require_once '../classes/Cuadrado.php';
    require_once '../classes/Circulo.php';
    if($_SESSION['figura'] == 'triangulo'){
        $figura = new Triangulo($_SESSION['figura'], $_SESSION['lado1T'], $_SESSION['lado2T'], $_SESSION['lado3T']);
    } elseif($_SESSION['figura'] == 'rectangulo'){
        $figura = new Rectangulo($_SESSION['figura'], $_SESSION['lado1R'], $_SESSION['lado2R']);
    } elseif($_SESSION['figura'] == 'cuadrado'){
        $figura = new Cuadrado($_SESSION['figura'], $_SESSION['lado1C']);
    } elseif($_SESSION['figura'] == 'circulo'){
        $figura = new Circulo($_SESSION['figura'], $_SESSION['radioC']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css" integrity="sha256-XE4NT4UAtULuSdFWQXaaLSOt0/ZqL5xbX/ObUyf2UTI=" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<<<<<<< HEAD
    <div id="centrar">
        <div id="Resultado">
=======
    <div>
        <div>
>>>>>>> origin/Circulo
            <?php
                if($_SESSION['figura'] == 'triangulo'){
                    echo $figura;
                } elseif($_SESSION['figura'] == 'rectangulo'){
                    echo $figura;
                } elseif($_SESSION['figura'] == 'cuadrado'){
                    echo $figura;
                } elseif($_SESSION['figura'] == 'circulo'){
                    echo $figura;
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js" integrity="sha256-bjbo7LFRGeuwaAMW0213gerdtgV83QAy23xMd9zNkbM=" crossorigin="anonymous"></script>
    <script>
        var ultimaFase = <?php echo json_encode($ultimaFase); ?>;
        if (ultimaFase) {
            Swal.fire({
                title: 'Calculo completado',
                text: 'Operaciones exitosas.',
                icon: 'success',
                confirmButtonText: 'Okey'
            });
        }
    </script>
</body>
</html>