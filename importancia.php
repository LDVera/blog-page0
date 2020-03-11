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
        <img class="bannerim" src="/img/banner-principal.jpg" alt="">
    </div>

    <main role="main" class=" container mt-5">
        <div class="row">
            <div class="col-md-8 blog-main">


                <div class="blog-post jumbotron pb-3 pt-4 ">
                    <h2 class="blog-post-title">Cableado estructurado e importancia</h2>
                    <p class="blog-post-meta">Febrero 20, 2020 by <a href="#">Diego</a></p>

                    <p class="text-justify">Para poder hablar sobre la importancia de algun elemento es fundamental conocerlo primero es por ello que respondiendo a esta interrogante, podemos afirmar la siguiente definición sobre el cableado estructurado:</p>
                    <p class="text-justify">El cableado estructurado es un enfoque sistemático de cableado, que busca crear un sistema ordenado y de fácil comprensión para los instaladores, administradores y técnicos que interactúan con él.</p>
                    <p>
                        Y como en toda instalación, es de esperarse un resultado el cual en este caso es una instalación bien diseñada debe ofrecer un rendimiento predecible, maximizar la disponibilidad del sistema, ser flexible y permitir movimientos, adiciones y cambios.
                    </p>
                    <p>Una palabra que probablemente sera muy escuchada en temas relacionados a el cableado estructurado es el orden y de este se deriban sus beneficios:</p>
                    <ul>
                        <li>Consistencia en el diseño y la instalación.</li>
                        <li>Cumplimiento de los requisitos físicos y de línea de transmisión.</li>
                        <li>Los errores humanos se reducen.</li>
                        <li>Escalabilidad para el crecimiento, movimiento o adiciones en el sistema.</li>
                        <li>Estética.</li>
                        <li>Documentación uniforme.</li>
                    </ul>
                    <p>Ahora si llegado este punto aun te preguntas ¿por qué es importante? debo de decirte que el 70% de los problemas asiciados a las redes, nacen de problemas con el cableado y estos problemas pueden presentarte como intermitencia en el
                        servicio, tiempos de respuesta o bloqueos de aplicaciones, etc...
                    </p>
                </div>
                <div class="blog-post jumbotron pb-3 pt-4 ">
                    <h2 class="blog-post-title">Comentarios</h2>
                    <p>si tienes alguna sugerencia por favor comentala aqui :D</p>
                    <input type="text" name="comentario" id="comentario1" style="width: 100%; height: 200px;">
                    <input class="mt-2" type="button" value="Comentar">
                </div>

            </div>
            <!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">Indice</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Cableado estructurado e importancia</a></li>
                        <li><a href="estandares.html">Estandares de cableado estructurado</a></li>
                    </ol>
                </div>

                <div class="p-4 bg-light rounded">
                    <h4 class="font-italic">Redes y contacto</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/LDVera" target="_blank">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside>
            <!-- /.blog-sidebar -->

        </div>
        <!-- /.row -->




    </main>



    <!-- Footer -->
    
    <div id="footer"></div>
    <!-- Footer -->
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>