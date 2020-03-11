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
                    <div class="ml-1">
                        <h2>¿Por que un blog?</h2>

                    </div>
                    </br>
                    <p class="text-justify">Para reforzar los conocimientos ya adquiridos se nos ha encomendado la tarea de desarrollar un blog en al cual compartamos nuestras experiencias en cuanto a la materia, asegurando una mayor asimilación de información y el reforzamineto
                        simultaneo de conocmientos adquiridos en periodos pasados.</p>

                    <p class="text-justify">Es por ello que en el periodo comprendido entre febrero y mayo se estara añadiendo nueva información con fines informativos y educativos a el presente blog.</p>

                    <p class="text-justify">si de alguna forma llegas a necesitar ayuda y consideras que puedo brindartela no dudes en preguntarme</p>
                </div>


            </div>
            <!-- /.blog-main -->


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