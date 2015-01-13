<!DOCTYPE HTML>
<!--
       Joaquin b
-->
<html>
    <head>
        <title>La Farola</title>
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
    <body>

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
                            <li ><a href="index.php">Home</a></li>
                            <li ><a href="Menu.php">Menu</a></li>
                            <li class="active"><a href="contacto.php">Contacto</a></li>


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header -->

        <!-- Main -->
        <div id="main">
            <div class="container">
                <div class="row">

                    <!-- Sidebar -->
                    <div id="sidebar" class="3u">
                        <section>
                            <header>
                                <h2 style=" visibility: hidden;">Gravida praesent</h2>
                                <span class="byline">En todo capital y zona norte</span>
                            </header>
                            <p>San isidro, urquiza, cabildo, olivos, martinez y microcentro</p>
                            
                            <p>4725-9856</p>
                                <p>info@lafarola.com</p>

                        </section>
                    </div>
                    <!-- Sidebar -->

                    <!-- Content -->
                    <div id="content" class="6u skel-cell-important">
                        <section>
                            <header>
                                <h2>Visita nuestras franquicias</h2>
                              
                            </header>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d105145.50784393492!2d-58.461072624075406!3d-34.5586918254185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sla+farola+restaurente!5e0!3m2!1ses-419!2sar!4v1421022720835" width="600" height="450" frameborder="0" style="border:0"></iframe>
                        </section>
                    </div>
                    <!-- /Content -->



                </div>

            </div>
        </div>
        <!-- Main -->

        <!-- Footer -->
        <?php 
        require '/../../app/view/templates/footer.php';
        ?>

    </body>
</html>