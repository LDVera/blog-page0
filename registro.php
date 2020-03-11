<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
    <script>
        $(function() {
            $("#header").load("header.php");
            $("#footer").load("footer.php");
        });
    </script>
    <title>Registro</title>
</head>
<body>
    <div id="particles-js"></div>
    <div id="header"></div>
        <div class="contenedorp mt-3">
            <div class="row p mx-auto pt-4 ml-4 mr-4 mb-4">
                <div class="col-4 pp">
                    <div class="row">
                        <div class="col-12 titulor text-center">
                            ¿Por qué registrarte?
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11 mx-auto mt-3 text-center">
                            <p class="text-justify">Si tu principal objetivo es conocer información sobre distintos temas relacionados a estandares de 
                                cableado, puedo asegurate que estas en el lugar indicado.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11 mx-auto mt-3 text-center">
                            <p class="text-justify">Adquiriras conocimientos sobre la materia ademas de que lograras obtener una guia en caso de que necesites estudiar, ¿qué mas puedes pedir?.</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 ppp">
                    <div class="row">
                        <div class="col-12 titulor text-center">REGISTRO</div>
                        <p class="text-center col-12">Registrate ahora, ¡es totalmente gratis!</p>
                    </div>
                    <div class="row">
                        <div class="col-10 mx-auto mt-3">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="Usuario" placeholder="nombre de usuario" >
                                </div>
                                <div class="input-group mb-3 mt-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" name="correo" placeholder="Correo electronico" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
                                </div>
                                
                                <div class="input-group mt-3">
                                    <input type="password" class="form-control" name="Concontraseña" placeholder="Confirmar contraseña">
                                </div>
                                <div class="boton-s mx-auto col-2 mt-5 mb-5">
                                    <button type="submit" id="mainlogin" name="btnGuardar" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <div id="footer"></div>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>