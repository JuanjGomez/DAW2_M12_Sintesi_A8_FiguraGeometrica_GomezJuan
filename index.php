<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css" integrity="sha256-XE4NT4UAtULuSdFWQXaaLSOt0/ZqL5xbX/ObUyf2UTI=" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./style/styleForm.css">
    <title>Figura geometrica</title>
</head>
<body>
    <div id="centrar">
        <div id="form">
            <h3>Calcular area y perimetro de una figura geometrica</h3>
            <form action="./validaciones/verFigura.php" method="POST">
                <label for="figura">Elige tu figura geometrica:</label>
                <select id="figura" name="figura" onblur="validarSelect()">
                    <option value="" selected disabled>Elige una figura</option>
                    <option value="triangulo">Triangulo</option>
                    <option value="rectangulo">Rectangulo</option>
                    <option value="cuadrado">Cuadrado</option>
                    <option value="circulo">Circulo</option>
                </select>
                <p id="errorSelect"></p>
                <?php if(isset($_GET['selectVacio'])){ echo '<p>El campo no puede estar vacio.</p>';} ?>
                <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js" integrity="sha256-bjbo7LFRGeuwaAMW0213gerdtgV83QAy23xMd9zNkbM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/validaForm.js"></script>
    <script>
        const urlParms = new URLSearchParams(window.location.search)
        if(urlParms.get('error') === '1'){
            Swal.fire({
                title: 'Error',
                text: 'Debes seleccionar una figura.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            })
        }
        if(urlParms.get('error') === '2'){
            Swal.fire({
                title: 'Error',
                text: 'Debes elegir alguna figura.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            })
        }
        if(urlParms.get('error') === '3'){
            Swal.fire({
                title: 'Error',
                text: 'Debes comenzar por index.php.',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            })
        }
    </script>
</body>
</html>