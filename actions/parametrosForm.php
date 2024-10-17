<?php
    session_start();
    if(!isset($_SESSION['figura'])){
        header("Location: ../index.php?error=3");
        exit();
    }
    $fase1Completada = false;
    if (isset($_SESSION['success1']) && $_SESSION['success1']) {
        $fase1Completada = true;
        unset($_SESSION['success1']);
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
    <form action="../validacions/verLados.php" method="POST">
        <?php if($_SESSION['figura'] === 'triangulo'){
            echo '<label for="lado1">el lado </label>';
        } else if($_SESSION['figura'] === 'rectangulo'){
            echo '<label for="lado1">Introduce la base</label><br>';
            echo '<input type="number" name="lado1" id="lado1" onblur="ladoUno()">';
            if(isset($_GET['unoVacio'])){echo "<p>El campo no puede estar vacio.</p>";}
            if(isset($_GET['unoMal'])){echo '<p>El campo debe ser numerico.</p>';}
            echo "<p id='errorLadoUno'></p>";
            echo '<label for="lado2">Introduce la altura</label><br>';
            echo '<input type="number" id="lado2" name="lado2" onblur="ladoDos()">';
            if(isset($_GET['unoVacio'])){echo "<p>El campo no puede estar vacio.</p>";}
            if(isset($_GET['unoMal'])){echo '<p>El campo debe ser numerico.</p>';}
            echo "<p id='errorLadoDos'></p>";
        } else if($_SESSION['figura'] === 'cuadrado'){
            echo '<label for="lado1">Introduce un lado del cuadrado:</label><br>';
            echo '<input type="number" id="lado1" name="lado1" onblur="ladoUno()">';
            echo "<p id='errorLadoUno'></p>";
        } else if($_SESSION['figura'] === 'circulo'){
            echo '<label for="radio">Introduce el radio del circulo:</label><br>';
            echo '<input type="number" id="lado1" name="radio" onblur="ladoUno()">';
            echo "<p id='errorLadoUno'></p>";
        } ?>
        <input type="submit" id="decoracio" value="Calcular">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js" integrity="sha256-bjbo7LFRGeuwaAMW0213gerdtgV83QAy23xMd9zNkbM=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/validaFormLados.js"></script>
    <script>
        var urlParms = new URLSearchParams(window.location.search);
        if(urlParms.get('error') === '4'){
            Swal.fire({
                title: 'Error',
                text: 'Debes introducir los datos necesarios.',
                icon: 'error',
                confirmButtonText: 'Volver a intentarlo'
            });
        }
        var fase1Completada = <?php echo json_encode($fase1Completada); ?>;
        if (fase1Completada) {
            Swal.fire({
                title: 'Fase 1 completada',
                text: 'Ahora completa los datos para calcular el área y perímetro.',
                icon: 'success',
                confirmButtonText: 'Continuar'
            });
        }
    </script>
</body>
</html>