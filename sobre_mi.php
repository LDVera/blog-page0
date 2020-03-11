<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(function() {
            $("#header").load("header.php");
            $("#footer").load("footer.php");
        });
    </script>
</head>

<body>

    <div id="particles-js"></div>
    <div id="header"></div>




    <div class="banner">
        <img class="bannerim" src="/img/banner-bienvenidos.jpg" alt="">
    </div>

    <main role="main" class=" container col-12 mt-5">
        <div class="row">
            <div class="col-md-9 mx-auto blog-main">


                <div class="blog-post jumbotron pb-3 pt-4 ">
                    <div><img class="foto mr-4" src="/img/foto.jpg" alt=""></div>
                    <div class="ml-4">
                        <h2>Luis Diego Vera Alvarez</h2>
                        <p class="mb-0">Actual Estudiante el TecNM Roque Campus Apaseo el Alto</p>
                        <p class="mb-0">22 años de edad</p>
                    </div>
                    </br>
                    <p class="text-justify">¡Hola que tal! un gusto, me presento.</p>
                    <p class="text-justify">Me llamo Luis Diego pero la mayor parte del tiempo me llaman Diego, soy alumno del TecNM Roque Campus Apaseo el Actualmente me encuentro cursando el ultimo semestre de la ingenieria en Tecnologias de la Informacion y las Comunicaciones</p>

                    <p class="text-justify">Soy un amante de la music a tiempo completo, dedicado y apasionado con lo que hago.</p>
                    <p class="text-justify">En un futuro espero tener la oportunidad de colaborar en distintos proyectos para poder adquirir mas experiencia y aprender aun mas de lo que ya conozco.</p>

                </div>


            </div>
            <!-- /.blog-main -->


        </div>
        <!-- /.row -->




    </main>



    <!-- Footer -->
    <div id="footer" ></div>
    <!-- Footer -->
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>