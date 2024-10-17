<?php
    session_start();
    if(!isset($_SESSION["figura"]) || !isset($_SESSION["success1"])){
        header("Location:../index.php?error=3");
        exit();
    }
    $ultimaFase = false;
    if (isset($_SESSION['success2']) && $_SESSION['success2']) {
        $ultimaFase = true;
        unset($_SESSION['success2']);
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