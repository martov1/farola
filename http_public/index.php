<!DOCTYPE HTML>
<!--
      Joaquin 
   
   
-->
<html>
    <head>
        <title>La farola</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-panels.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
        <link rel="stylesheet" href="css/skel-noscript.css" />
        <link rel="stylesheet" href="css/style.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

    </head>
    <body class="homepage">

        <!-- Header -->
        <div id="header"  >
            <div class="bg_pattern">

                <div class="container">

                    <!-- Logo -->
                    <div id="logo">
                        <h1><a href="#">La Farola</a></h1>
                        <span>Bar y restaurante</span>
                    </div>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="active" ><a href="index.php">Home</a></li>
                            <li ><a href="Menu.php">Menu</a></li>
                            <li ><a href="contacto.php">Contacto</a></li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header -->

        <!-- Main -->
        <div id="main">
            <div class="container">
                <header>
                    <h2 style="text-align: center">Proba alguno de nuestros clasicos!</h2>
                </header>
                <div class="row">
                    <div class="3u">
                        <section>
                            <a href="#" class="image full"><img src="images/pizzanesa.jpg" alt="" /></a>
                            <p>Deliciosa pizzanesa, senti el verdadero sabor del oregano!!</p>
                            <!--                            <a href="#" class="button">Envio por 210$</a>-->
                        </section>
                    </div>
                    <div class="3u">
                        <section>
                            <a href="#" class="image full"><img src="images/pizza.jpg" alt="" /></a>
                            <p>Nuestra clasica pizza de choclo, morron, jamon cocido y pepinillos!!</p>
                            <!--                            <a href="#" class="button">Envio por 130$</a>-->
                        </section>
                    </div>
                    <div class="3u">
                        <section>
                            <a href="#" class="image full"><img src="images/rabas.jpg" alt="" /></a>
                            <p>Deliciosas rabas de calamar</p>
                            <!--                            <a href="#" class="button">Envio por 75$</a>-->
                        </section>
                    </div>
                    <div class="3u">
                        <section>
                            <a href="#" class="image full"><img src="images/asado tira.jpg" alt="" /></a>
                            <p>Nuestro clasico y jugoso asado de tira</p>
                            <!--                            <a href="#" class="button">Envio por 65$!</a>-->
                        </section>
                    </div>
                </div>
                <div class="divider">&nbsp;</div>
                <div class="row">

                    <!-- Content -->
                    <div class="8u skel-cell-important">
                        <section id="content">
                            <header>
                                <h2>Una propuesta gastronomica distinta</h2>
                                <span class="byline">Grandes criticos culinarios nos abalan</span>
                            </header>
                            <p><a href="#" class="image full"><img src="images/farola.jpg" alt=""></a></p>

                        </section>
                    </div>
                    <!-- /Content -->

                    <!-- Sidebar -->
                    <div id="sidebar" class="4u">
                        <section>
                            <header>
                                <h2 style="visibility: hidden;">a</h2>
                                <span class="byline visibility: hidden;"></span>
                            </header>
                            <p>"El colorido y la música de La Farola lo vuelven un lugar donde se antoja comer, justo lo que imagino al pensar en la versión elegante, mas no sobria, de un restaurante de Milanesas"           .</p>
                            <p> Guillermo Frido</p>
                            <p>"Mozos con oficio, variedad, platos ricos, elaborados y de buena materia prima, además cuenta con menù infantil (varias opciones), juegos para niños y una galería divina para los dìas cálidos !"             Romina.</p>
                            <p>Romina Sosa</p>

                        </section>
                    </div>
                    <!-- Sidebar -->

                </div>

            </div>
        </div>
        <!-- Main -->

        <!-- Footer -->
        <?php
        require '/../app/view/templates/footer.php';
        ?>
    </body>
</html>