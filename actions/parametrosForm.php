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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../style/styleForm.css">
    <title>Document</title>
</head>
<body>
    <div id="centrar">
        <div id="form">
            <form action="../validaciones/verLados.php" method="POST">
                <?php 
                    if($_SESSION['figura'] === 'triangulo'){
                        echo '<label for="lado1">Introduce el lado 1(Base):</label>';
                        echo '<input type="number" name="lado1" id="lado1" onblur="ladoUno()" value="' . (isset($_SESSION["lado1T"]) ? $_SESSION["lado1T"] : '') . '">';
                        echo "<p id='errorLadoUno' class='error'></p>";
                        if(isset($_GET['unoVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['unoMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";}
                        echo '<label for="lado2">Introduce el lado 2:</label><br>';
                        echo '<input type="number" id="lado2" name="lado2" onblur="ladoDos()" value="' . (isset($_SESSION["lado2T"]) ? $_SESSION["lado2T"] : '') . '">';
                        echo "<p id='errorLadoDos' class='error'></p>";
                        if(isset($_GET['dosVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['dosMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";}
                        echo '<label for="lado3">Introduce el lado 3:</label><br>';
                        echo '<input type="number" id="lado3" name="lado3" onblur="ladoTres()" value="' . (isset($_SESSION["lado2T"]) ? $_SESSION["lado3T"] : '') . '">';
                        echo "<p id='errorLadoTres' class='error'></p>";
                        if(isset($_GET['tresVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['tresMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";}
                    } else if($_SESSION['figura'] === 'rectangulo'){
                        echo '<label for="lado1">Introduce el lado 1(Base):</label><br>';
                        echo '<input type="number" name="lado1" id="lado1" onblur="ladoUno()" value="' . (isset($_SESSION["lado1R"]) ? $_SESSION["lado1R"] : '') . '">';
                        echo "<p id='errorLadoUno' class='error'></p>";
                        if(isset($_GET['unoVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['unoMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";}
                        echo '<label for="lado2">Introduce el lado 2(Altura):</label><br>';
                        echo '<input type="number" id="lado2" name="lado2" onblur="ladoDos()" value="' . (isset($_SESSION["lado2R"]) ? $_SESSION["lado2R"] : '') . '">';
                        echo "<p id='errorLadoDos' class='error'></p>";
                        if(isset($_GET['dosVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['dosMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";}
                    } else if($_SESSION['figura'] === 'cuadrado'){
                        echo '<label for="lado1">Introduce un lado del cuadrado(Cualquier lado):</label><br>';
                        echo '<input type="number" id="lado1" name="lado1" onblur="ladoUno()" value="' . (isset($_SESSION["lado1C"]) ? $_SESSION["lado1C"] : '') . '">';
                        echo "<p id='errorLadoUno' class='error'></p>";
                        if(isset($_GET['unoVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['unoMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";};
                    } else if($_SESSION['figura'] === 'circulo'){
                        echo '<label for="radio">Introduce el radio del circulo:</label><br>';
                        echo '<input type="number" id="lado1" name="lado1" onblur="ladoUno()" value="' . (isset($_SESSION["radioC"]) ? $_SESSION["radioC"] : '') . '">';
                        echo "<p id='errorLadoTres' class='error'></p>";
                        if(isset($_GET['unoVacio'])){echo "<p class='error'>El campo no puede estar vacio.</p>";}
                        if(isset($_GET['unoMal'])){ echo "<p class='error'>El numero debe ser mayor que 0.</p>";}
                    } 
                    ?>
                <button type="submit" id="enviar" class="btn btn-primary">Calcular</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js" integrity="sha256-bjbo7LFRGeuwaAMW0213gerdtgV83QAy23xMd9zNkbM=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/validaFormLados.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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