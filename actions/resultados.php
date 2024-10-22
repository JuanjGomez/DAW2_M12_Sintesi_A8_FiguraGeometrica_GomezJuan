<?php
    session_start();
    if(!isset($_SESSION["figura"])){
        header("Location:../index.php?error=3");
        exit();
    }
    $finalCompletada = false;
    if (isset($_SESSION['success2']) && $_SESSION['success2']) {
        $finalCompletada = true;
        unset($_SESSION['success2']);
    }
    if($_SESSION['figura'] == 'triangulo'){
        require_once '../classes/Triangulo.php';
        $figura = new Triangulo($_SESSION['figura'], $_SESSION['lado1T'], $_SESSION['lado2T'], $_SESSION['lado3T']);
    } elseif($_SESSION['figura'] == 'rectangulo'){
        require_once '../classes/Rectangulo.php';
        $figura = new Rectangulo($_SESSION['figura'], $_SESSION['lado1R'], $_SESSION['lado2R']);
    } elseif($_SESSION['figura'] == 'cuadrado'){
        require_once '../classes/Cuadrado.php';
        $figura = new Cuadrado($_SESSION['figura'], $_SESSION['lado1C']);
    } elseif($_SESSION['figura'] == 'circulo'){
        require_once '../classes/Circulo.php';
        $figura = new Circulo($_SESSION['figura'], $_SESSION['radioC']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css" integrity="sha256-XE4NT4UAtULuSdFWQXaaLSOt0/ZqL5xbX/ObUyf2UTI=" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../style/styleForm.css">
    <title>Document</title>
</head>
<body>
    <div id="centrar">
        <div id="Resultado">
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
            <div id="botones">
                <a href="parametrosForm.php" class="btn btn-warning">Cambiar Lado</a>
                <a href="cerrarSesion.php" class="btn btn-primary">Elegir figura</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js" integrity="sha256-bjbo7LFRGeuwaAMW0213gerdtgV83QAy23xMd9zNkbM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        var finalCompletada = <?php echo json_encode($finalCompletada); ?>;
        if (finalCompletada) {
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