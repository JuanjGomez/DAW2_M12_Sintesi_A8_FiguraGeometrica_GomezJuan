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